<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\imageModel;

class ImageController extends Controller
{
    public function index()
    {
        $images = DB::table('image_models')->get();
        return view('back.image.index', compact('images'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $image = new imageModel();
            $image->image = $request->image->store('uploads/image');
            $image->login_image = $request->login_image->store('uploads/image');
            $image->signup_image = $request->signup_image->store('uploads/image');
            $image->upper_text = $request->upper_text;
            $image->text = $request->text;
            $image->button_text = $request->button_text;
            $image->save();
            return redirect()->back();
        }
        else{
            return view('back.image.add');

        }
    }

    public function edit(Request $request, imageModel $image)
    {
        if ($request->getMethod() == 'POST') {

            $image->upper_text = $request->upper_text;
            $image->text = $request->text;
            $image->button_text = $request->button_text;
            if ($request->hasFile('image')) {
                $image->image = $request->image->store('uploads/image');
            }
            if ($request->hasFile('login_image')) {
                $image->login_image = $request->login_image->store('uploads/image');
            }
            if ($request->hasFile('signup_image')) {
                $image->signup_image = $request->signup_image->store('uploads/image');
            }
            $image->save();
            return redirect()->back();
        } else {
            return view('back.image.edit', compact('image'));
        }
    }
    public function del($image)
    {
        DB::table('image_models')->where('id', $image)->delete();
        return redirect()->back();
    }
}
