<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]))

        {
            $user = User::where('username', $request->username)->first();

            if($user->is_admin())
            {
                return redirect()->route('admin/home');
            }
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
