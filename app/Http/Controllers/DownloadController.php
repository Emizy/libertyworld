<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DownloadController extends Controller
{
    public function downfunc()
    {
    	$posts = DB::table('posts')->get();
    	return view('download.viewfile', compact('posts'));
    }
}
