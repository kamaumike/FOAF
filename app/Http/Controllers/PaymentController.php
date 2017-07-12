<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use \Cart as Cart;

/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        
        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * Store details of payment with PayPal.
     * 
     */
    public function payWithPaypal()
    {
        // ### Payer
        // A resource representing a Payer that funds a payment
        // For direct credit card payments, set payment method
        // to 'credit_card' and add an array of funding instruments.        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        // Empty array for storing item information
        $my_cart = array();

        // Loop through the items in shopping cart
        foreach (Cart::content() as $item) { 
            // ### Itemized information
            // (Optional) Lets you specify item wise
            // information                             
            $new_item = new Item();
            $new_item->setName($item->name)
                ->setCurrency('USD')
                ->setQuantity($item->qty)
                ->setPrice($item->price); 

            // Add item details to array
            $my_cart[] = $new_item;                    
        }

        $item_list = new ItemList();
        $item_list->setItems($my_cart);

        // ### Additional payment details
        // Use this optional field to set additional
        // payment information such as tax, shipping
        // charges etc.
        $details = new Details();
        $details->setShipping(0)
            ->setTax(Cart::instance('default')->tax())
            ->setSubtotal(Cart::instance('default')->subtotal());     

        // ### Amount
        // Lets you specify a payment amount.
        // You can also specify additional details
        // such as shipping, tax.
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal(Cart::total())
            ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it.
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Buy Goods');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl($url = route('paymentstatus')) /** Specify return URL **/
            ->setCancelUrl($url = route('paymentstatus'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
            /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error_message','Connection timeout');
                return redirect('/checkout');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            } else {
                \Session::put('error_message','An error occured, apologies for the inconvenience');
                return redirect('/checkout');
                /** die('Some error occur, sorry for inconvenient'); **/
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            /** redirect to paypal **/
            return redirect()->away($redirect_url);
        }
        \Session::put('error_message','Unknown error occurred');
        return redirect('/checkout');
    }

    /**
     * Get the payment status of PayPal.
     * 
     */
    public function paypalPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error_message','Payment failed! Please try again');
            return redirect('/checkout');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later **/

        if ($result->getState() == 'approved') {

            // Empty the shopping cart if payment successful.
            Cart::destroy(); 
            
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            \Session::put('success_message','Payment was successful');
            return redirect('/shop');
        }
        \Session::put('error_message','Payment failed! Please try again');
        return redirect('/checkout');
    }
}
