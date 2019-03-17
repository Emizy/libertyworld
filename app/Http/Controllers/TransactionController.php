<?php

namespace App\Http\Controllers;

use App\Buydata;
use App\ScatchCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function alltransaction()
    {
        $show = Buydata::all();
        return view('transaction')
            ->with('show', $show);
    }

    public function data_transaction()
    {
        $transaction = Buydata::where('email', Auth::user()->email)->get();
        return view('data_transaction')
            ->with('transaction', $transaction);
    }
    

    
    // public function ScratchCardAll()
    // {
    //     return view('ScratchCardAll');
    // }

    // public function ScratchTransaction()
    // {
    //     $transaction = ScatchCard::where('user_id', Auth::user()->id)->get();
    //     return view('ScratchCardAll')
    //         ->with('transaction', $transaction);
    // }

    public function checkshow()
    {
        return view('checkcard');
    }

    public function check(Request $request)
    {
        $ref_id = $request['ref_id'];
        $card = $request['card'];
        if ($card == "WAEC") {
            $check = WaecCard::where('ref_id', $ref_id)
                ->where('Usage_status', 'USED')->get();
            $date = ScatchCard::where('ref_id', $ref_id)->first();
            $time = $date->created_at;
            return view('checkcard')
                ->with('check', $check)
                ->with('time', $time);
        } elseif ($card == "NECO") {
            $check = NecoCard::where('ref_id', $ref_id)
                ->where('Usage_status', 'USED')->get();
            $date = ScatchCard::where('ref_id', $ref_id)->first();
            $time = $date->created_at;
            return view('checkcard')
                ->with('check', $check)
                ->with('time', $time);
        } elseif ($card == "WAECGCE") {
            $check = WaecGceCard::where('ref_id', $ref_id)
                ->where('Usage_status', 'USED')->get();
            $date = ScatchCard::where('ref_id', $ref_id)->first();
            $time = $date->created_at;
            return view('checkcard')
                ->with('check', $check)
                ->with('time', $time);
        } else {
            return view('checkcard')
                ->with('ref_id', $ref_id);
        }

    }
}


