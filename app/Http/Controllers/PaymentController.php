<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\NecoCard;
use App\ScatchCard;
use App\WaecCard;
use App\WaecGceCard;
use Paystack;
use App\Buydata;
use App\Data_Price;
use Nexmo\Laravel\Facade\Nexmo;


class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $data = Data_Price::all();
        return view('dashboard')
            ->with('data', $data);
    }


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    public function checkout(Request $request)
    {


        $telephone = $request['telephone'];
        $data = $request['data'];
        if ($data == "MTN 1GB") {
            $amount = 600;
        }
       
        $total = $amount * 100;
        Session::put('telephone', $telephone);
        Session::put('data', $data);
        Session::put('amount', $amount);
        Session::put('total', $total);
        return view('checkout');
    }


    public function redirectToGateway(Request $Request)
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {

        $paymentDetails = Paystack::getPaymentData();
        if ($paymentDetails['data']['status'] == "success") {
            if ($paymentDetails['data']['metadata']['type'] == 'DATA') {
                $data = new Buydata();
                $data->data = $paymentDetails['data']['metadata']['data'];
                $data->email = $paymentDetails['data']['metadata']['email'];
                $data->telephone = $paymentDetails['data']['metadata']['telephone'];
                $data->status = "Successful";
                $data->amount = $paymentDetails['data']['metadata']['Amount'];
                $data->save();
                Nexmo::message()->send([
                    'to' => '2348136088266',
                    'from' => '2348136088266',
                    'text' => 'I just made a payment for DATA - Name ' . Auth::user()->name . '-NUMBER ' . $paymentDetails['data']['metadata']['telephone'] . " Amount ".$paymentDetails['data']['metadata']['Amount']
                ]);
                Session::flash('message', 'Data subscription successfull,you will recieve your data shortly');
                $data = Data_Price::all();
                return view('data_transaction')
                    ->with('data', $data);
            }
            if ($paymentDetails['data']['metadata']['type'] == 'WAEC') {
                $pin = WaecCard::where('ref_id', $paymentDetails['data']['metadata']['ref_id'])
                    ->first();
                $pin->Usage_status = 'USED';
                $pin->save();
                $scratch = new ScatchCard();
                Session::put('pin', $pin->card_pin);
                Session::put('ref_id', $pin->ref_id);
                $scratch->user_id = Auth::user()->id;
                $scratch->scratch_name = 'WAEC';
                $scratch->card_pin = $pin->card_pin;
                $scratch->ref_id = $paymentDetails['data']['metadata']['ref_id'];
                $scratch->price = $paymentDetails['data']['metadata']['price'];
                $scratch->year = $paymentDetails['data']['metadata']['year'];
                $scratch->Usage_status = 'USED';
                $scratch->save();
                Nexmo::message()->send([
                    'to' => '2348136088266',
                    'from' => '2348136088266',
                    'text' => 'I just made a payment for WEAC CARD - Name ' . Auth::user()->name . ' SERIAL: ' . $paymentDetails['data']['metadata']['ref_id'] . " Price: ".$paymentDetails['data']['metadata']['price']
                ]);
                Session::flash('Waec_Success', 'CONGRATULATIONS,You have Successfully Purchased A Scratch Card Pin');
                return view('Scratch');
            }
            if ($paymentDetails['data']['metadata']['type'] == 'NECO') {
                $pin = NecoCard::where('ref_id', $paymentDetails['data']['metadata']['ref_id'])
                    ->first();
                $pin->Usage_status = 'USED';
                $pin->save();
                $scratch = new ScatchCard();
                Session::put('pin', $pin->card_pin);
                Session::put('ref_id', $pin->ref_id);
                $scratch->user_id = Auth::user()->id;
                $scratch->scratch_name = 'NECO';
                $scratch->card_pin = $pin->card_pin;
                $scratch->ref_id = $paymentDetails['data']['metadata']['ref_id'];
                $scratch->price = $paymentDetails['data']['metadata']['price'];
                $scratch->year = $paymentDetails['data']['metadata']['year'];
                $scratch->Usage_status = 'USED';
                $scratch->save();
                Nexmo::message()->send([
                    'to' => '2348136088266',
                    'from' => '2348136088266',
                    'text' => 'I just made a payment for NECO CARD - Name ' . Auth::user()->name . ' SERIAL: ' . $paymentDetails['data']['metadata']['ref_id'] . " Price: ".$paymentDetails['data']['metadata']['price']
                ]);
                Session::flash('Neco_Success', 'CONGRATULATIONS,You have Successfully Purchased A Scratch Card Pin');
                return view('Scratch');
            }
            if ($paymentDetails['data']['metadata']['type'] == 'WAECGCE') {
                $pin = WaecGceCard::where('ref_id', $paymentDetails['data']['metadata']['ref_id'])
                    ->first();
                $pin->Usage_status = 'USED';
                $pin->save();
                $scratch = new ScatchCard();
                Session::put('pin', $pin->card_pin);
                Session::put('ref_id', $pin->ref_id);
                $scratch->user_id = Auth::user()->id;
                $scratch->scratch_name = 'WACEGCE';
                $scratch->card_pin = $pin->card_pin;
                $scratch->ref_id = $paymentDetails['data']['metadata']['ref_id'];
                $scratch->price = $paymentDetails['data']['metadata']['price'];
                $scratch->year = $paymentDetails['data']['metadata']['year'];
                $scratch->Usage_status = 'USED';
                $scratch->save();
                Nexmo::message()->send([
                    'to' => '2348136088266',
                    'from' => '2348136088266',
                    'text' => 'I just made a payment for NECO GCE CARD - Name ' . Auth::user()->name . ' SERIAL: ' . $paymentDetails['data']['metadata']['ref_id'] . " Price: ".$paymentDetails['data']['metadata']['price']
                ]);
                Session::flash('WaecGce_Success', 'CONGRATULATIONS,You have Successfully Purchased A Scratch Card Pin');
                return view('Scratch');
            }
        } elseif ($paymentDetails['data']['success'] == "failed") {
            Session::flash('trans_error', 'Oops,Transaction not successfull,Kindly try Again later');
            Return view('TransError');
        }


    }


}