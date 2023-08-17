<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
     $images = DB::table('image_models')->get(['login_image','image']);
    return view('front.auth.login', compact('images'));
 }
 public function register(){
    $imagess = DB::table('image_models')->get();
    return view('front.auth.register', compact('imagess'));
 }

}
