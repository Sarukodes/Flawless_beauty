<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $images = DB::table('image_models')->get(['login_image','image']);
        if ($request->getMethod() == 'POST') {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('front.index');
            }
        } else {
            return view('front.auth.login', compact('images'));
        }
    }
    public function register(Request $request)
    {
        $imagess = DB::table('image_models')->get();
        if ($request->getMethod() == 'POST') {
            $request->validate([
                'name' => 'required',
                'email' => 'email|required|unique:users,email',
                'password' => 'required',
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('auth.login');
        } else {
            return view('front.auth.register', compact('imagess'));
        }
    }
}
