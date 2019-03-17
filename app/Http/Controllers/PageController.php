<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Postaccount;


class PageController extends Controller
{

/* New Record */

    public function getRecord(){
        $postaccount = Postaccount::all();

        return view('record')-> with('postaccounts', $postaccount);
    }

    public function getCreateaccount(){
        return view('Createaccount');
    }

    

}
