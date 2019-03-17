<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Buycard;
use App\Buydata;

class OrderController extends Controller
{
        
    public function buy_cards(){

        return view('buy_cards');
    }

    public function OrderCard(Request $request){
    	
    	$this->validate($request, [
    		'name' => 'required',
            'order' => 'required',
            'telephone' => 'required|string|max:11',
            'amount' => 'required'    
        ]);

        $name = $request['name'];
        $order = $request['order'];
        $telephone = $request['telephone'];
        $amount = $request['amount'];


        $user = new Buycard();
        $user->name = $name;
        $user->order = $order;
        $user->telephone = $telephone;
        $user->amount = $amount;
        
        $user->save();
        return redirect('/buy_cards')->with('response', 'Order Receive Successfully!');
    }

	public function buy_data(){

        return view('buy_data');
    }
    public function OrderData(Request $request){
    	
    	$this->validate($request, [
    		'name' => 'required',
            'data' => 'required',
            'telephone' => 'required|string|max:255',
            'amount' => 'required'    
        ]);

        $name = $request['name'];
        $data = $request['data'];
        $telephone = $request['telephone'];
        $amount = $request['amount'];


        $user = new Buydata();
        $user->name = $name;
        $user->data = $data;
        $user->telephone = $telephone;
        $user->amount = $amount;
        
        $user->save();
        return redirect('/buy_data')->with('response', 'Order Receive Successfully!');

    }
}
