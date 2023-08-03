<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $image  = DB::table('image_models')->latest()->first(['image','upper_text','text','button_text']);
        $sliders = DB::table('sliders')->get(['image','mobile_image','link']);
        $products = DB::table('products')->get();
        $categories=DB::table("categories")->get(["id","title",'image','des']);
        return view('front.home' ,compact('sliders','products','categories','image'));
    }
    public function product($id)
    {
        $product = Product::find($id);
        return view('front.productShow', compact('product'));
    }

}
