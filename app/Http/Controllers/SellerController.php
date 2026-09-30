<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;
class SellerController extends Controller
{
    //
    function list(){
        return Seller::find(1)->Product;
    }

    function manyrel(){
        return Seller::find(1)->productsManyData;
    }

    function manytomany(){
        // return Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }
}
