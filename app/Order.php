<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{    
    // Get payments associated with an Order
	public function payments()
	{
		
		return $this->hasMany(Payment::class);

	}     
}
