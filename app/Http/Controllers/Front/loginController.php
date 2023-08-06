<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]) ;
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('front.index');
            }
        }
        else{
            return view('front.login.login');
        }
    }
    public function signup(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('front.login');
        } else {

            return view('front.login.signup');
        }
    }
}
