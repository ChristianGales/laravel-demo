<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_name',
        'product_category',
        'product_status',
        'product_price',
        'product_description',
        
    ];
}
