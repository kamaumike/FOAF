<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status', 'tax', 'total',
    ];

    // Get payments associated with an Order
	public function payments()
	{
		
		return $this->hasMany(Payment::class);

	}

    // Get products associated with an Order
	public function orderProducts()
	{
		
		return $this->hasMany(OrderProduct::class);

	}

    // Get User details
    public function user()
    {

        return $this->belongsTo(User::class);

    }		     
}
