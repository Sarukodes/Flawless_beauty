<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        return view('front.productShow', compact('product'));
    }
}
