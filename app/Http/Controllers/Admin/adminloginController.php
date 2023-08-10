<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class adminloginController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = 'saru';
            $password = '12345';

            $adminUser = AdminUser::where('username', $username)->first();

            if ($adminUser && Hash::check($password, $adminUser->password)) {
                Auth::login($adminUser);
                return redirect()->route('admin.index');
            } else {
                return back()->withErrors(['message' => 'Invalid credentials']);
            }
        }

        return view('back.login');
    }
}
