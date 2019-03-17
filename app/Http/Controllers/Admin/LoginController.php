<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm(){
    	return view('admin.login');
    }

    public function admin_dashboard()
    {
    	return view('admin.home');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->route('admin.home');
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
