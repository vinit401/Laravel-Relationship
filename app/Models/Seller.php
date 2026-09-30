<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    //
    function product(){}

    function productsManyData(){
        return $this->hasMany(Product::class);
    }

    function manytomany(){
        return $this->belongsToMany(Product::class);
    }
}
