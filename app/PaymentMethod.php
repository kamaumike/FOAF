<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{    
    // Get payments associated with a payment method e.g Visa
	public function payments()
	{
		
		return $this->hasMany(Payment::class);

	}    
}
