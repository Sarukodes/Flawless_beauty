<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catogeryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('back.category.index', compact('categories'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $category = new  Category();
            $category->title = $request->title;
            $category->image = $request->image->store('uploads/category');
            $category->des = $request->des;
            $category->save();
            return redirect()->back();
        } else {

            return view('back.category.add');
        }
    }
    public function edit(Request $request, Category $category)
    {
        if ($request->getMethod() == 'POST') {
            $category->title = $request->title;
            $category->des = $request->des;

            if ($request->hasFile('image')) {
                $category->image = $request->image->store('uploads/category');
            }
            $category->save();
            return redirect()->back();
        } else {
            return view('back.category.edit', compact('category'));
        }
    }
    public function del($category)
    {
        DB::table('categories')->where('id', $category)->delete();
        return redirect()->back();
    }
}
