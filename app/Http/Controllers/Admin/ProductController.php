<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products as p')
        ->join('categories as c','c.id','=','p.category_id')
        ->select('p.id','p.name','p.price','p.short_desc','p.image','p.stock','c.title')->get();

        return view('back.product.index', compact('products'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {

            $product = new product();
            $product->name = $request->name;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            $product->image = $request->image->store('uploads/product');
            $product->price = $request->price;
            $product->sale_price = $request->sale_price;
            $product->on_sale = $request->filled('on_sale');
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->save();
            return redirect()->back()->with('success', 'Data added successfully');

        } else {
            $categories = DB::table('categories')->get(['id', 'title']);
            return view('back.product.add', compact('categories'));
        }
    }
    public function edit(Request $request, Product $product)
    {
        if ($request->getMethod() == 'POST') {
            $product->name = $request->name;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            if($request->hasFile('image')){
            $product->image = $request->image->store('uploads/product');

            }
            $product->price = $request->price;
            $product->sale_price = $request->sale_price;
            $product->on_sale = $request->filled('on_sale');
            $product->stock = $request->stock;
            $product->category_id = $request->category_id;
            $product->save();
            return redirect()->route('admin.product.index');
        }
        else{
            $categories = DB::table('categories')->get(['id', 'title']);
            return view('back.product.edit',compact('product','categories'));
        }
    }
    public function del($product)
    {
        DB::table('products')->where('id', $product)->delete();
        return redirect()->back();
    }
}
