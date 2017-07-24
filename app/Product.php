<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $fillable = ['name','slug','description','price','image',];

    // Get the Order id a product belongs to
	public function orderProducts()
	{
		
		return $this->hasMany(OrderProduct::class);

	}    
}
