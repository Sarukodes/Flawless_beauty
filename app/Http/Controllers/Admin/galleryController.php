<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galleryController extends Controller
{
    public function index(product $product)
    {
        $gallerys = DB::table('galleries')
        ->where('product_id',$product->id)
        ->get();
        return view('back.gallery.index', compact('gallerys','product'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $gallery = new gallery();
            $gallery->type=$request->type;
            $gallery->product_id=$request->product_id;
            $gallery->image = $request->image->store('uploads/gallery');
            $gallery->save();
            return redirect()->back();
        } else {
            return view('back.gallery.index');
        }
    }

    public function del($gallery) {
        $image=DB::table('galleries')->where('id',$gallery)->first(['type','image']);
        if($image->type==0){
            unlink(public_path($image->image));
        }
        DB::table('galleries')->where('id',$gallery)->delete();
        return redirect()->back();
    }
}
