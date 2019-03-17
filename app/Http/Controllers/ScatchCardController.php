<?php

namespace App\Http\Controllers;

use App\NecoCard;
use App\WaecGceCard;
use Illuminate\Support\Facades\Session;
use App\ScatchCard;
use App\WaecCard;
use Illuminate\Http\Request;
use Auth;

class ScatchCardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
        public function ScratchCardAll()
    {
        $transaction = ScatchCard::where('user_id', Auth::user()->id)->get();
        return view('ScratchCardAll')
            ->with('transaction', $transaction);
    }

    public function GetWaec()
    {
        $d = WaecCard::where('Usage_status', 'UNUSED')->take('1')->first();
        $total = $d->price * 100;
        Session::put('total', $total);
        Session::put('card_amount', $d->price);
        Session::put('ref_id', $d->ref_id);
        Session::put('year', '18/19');
        return view('waec');
    }

    public function GetNeco()
    {
        $d = NecoCard::where('Usage_status', 'UNUSED')->take('1')->first();
        $total = $d->price * 100;
        Session::put('total', $total);
        Session::put('card_amount', $d->price);
        Session::put('ref_id', $d->ref_id);
        Session::put('year', '18/19');
        return view('neco');
    }

    public function GetWaecGce()
    {
        $d = WaecGceCard::where('Usage_status', 'UNUSED')->take('1')->first();
        $total = $d->price * 100;
        Session::put('total', $total);
        Session::put('card_amount', $d->price);
        Session::put('ref_id', $d->ref_id);
        Session::put('year', '18/19');
        return view('waecgce');
    }

    public function Gettranserror()
    {
        Session::put('Waec_Success', 'CONGRATULATIONS,You have Successfully Purchased A Scratch Card Pin');
        Session::put('pin', '2FBIJKHGUTYU56789');
        Session::put('ref_id', 'GVFHJKHGYT3456FG');
        return view('Scratch');
    }
    
    //WAEC CARDS
    public function InsertWaecCards()
    {
        return view('InsertWaecCards');
    }
    
    public function UploadWaec(Request $request)
    {
        $this->validate($request, [
            'card_pin' => 'required',
            'ref_id' => 'required',
            'price' => 'required'
        ]);
        $insert = new WaecCard;
        $insert->card_pin = $request->input('card_pin');
        $insert->ref_id = $request->input('ref_id');
        $insert->price = $request->input('price');
        $insert->save();
        return redirect('/InsertWaecCards')->with('response', 'Waec Card added Successfully!');
    }
//NECO CARDS
    public function InsertNecoCards()
    {
        return view('InsertNecoCards');
    }
    
    public function UploadNeco(Request $request)
    {
        $this->validate($request, [
            'card_pin' => 'required',
            'ref_id' => 'required',
            'price' => 'required'
        ]);
        $insert = new NecoCard;
        $insert->card_pin = $request->input('card_pin');
        $insert->ref_id = $request->input('ref_id');
        $insert->price = $request->input('price');
        $insert->save();
        return redirect('/InsertNecoCards')->with('response', 'Neco Card added Successfully!');
    }

    //NECO GCE CARDS
    public function InsertNecoGCECards()
    {
        return view('InsertNecoGCECards');
    }
    
    public function UploadNecoGCE(Request $request)
    {
        $this->validate($request, [
            'card_pin' => 'required',
            'ref_id' => 'required',
            'price' => 'required'
        ]);
        $insert = new WaecGceCard;
        $insert->card_pin = $request->input('card_pin');
        $insert->ref_id = $request->input('ref_id');
        $insert->price = $request->input('price');
        $insert->save();
        return redirect('/InsertNecoGCECards')->with('response', 'Neco GCE Card added Successfully!');
    }
}
