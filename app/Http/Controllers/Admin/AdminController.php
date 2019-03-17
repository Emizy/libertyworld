<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct(){
    	$this->middleware('auth:admin');
    }

  
    public function admin_dashboard()
    {
        return view('admin.home');
    }



}
