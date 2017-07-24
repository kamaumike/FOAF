<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'quantity',
    ];

    // Get Order details
    public function order()
    {

        return $this->belongsTo(Order::class);

    }

    // Get Product details
    public function product()
    {

        return $this->belongsTo(Product::class);

    }        
}
