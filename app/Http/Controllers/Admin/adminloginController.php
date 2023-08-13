<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class adminloginController extends Controller
{

    public function logout()  {
        Auth::logout();
        return redirect()->route('login');
    }
    public function login(Request $request)
    {

        if($request->getMethod()=="POST"){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back()->withInput()->withErrors(['Invalid credentials']);
            }
        }else{

            return view('back.login');
        }
    }
}
