<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
public function cart(){
  $products=DB::table('products')->get(['image','name','price']);
    return view('front.cart', compact('products'));
}
}
