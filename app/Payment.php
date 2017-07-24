<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_method_id', 'order_id', 'transaction_id', 'currency_code', 'amount_paid', 'payment_status',
    ];

    // Get payment method associated with a payment
    public function paymentMethod()
    {

    	return $this->belongsTo(PaymentMethod::class);

    }

    // Get the order associated with a payment
    public function order()
    {

        return $this->belongsTo(Order::class);

    }

}
