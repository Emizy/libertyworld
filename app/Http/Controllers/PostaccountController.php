<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postaccount;
use Illuminate\Support\Facades\Session;

class PostaccountController extends Controller
{

    public function storePost(Request $request){
        $this->validate($request, [
            'reg' => 'required',
            'typing' => 'required',
            'photocopy' => 'required',
            'passport' => 'required',
            'graphic' => 'required',
            'others' => 'required',
            'expenses' => 'required',
            'income' => 'required'

        ]);

        $reg = $request->input('reg');
        $typing = $request->input('typing');
        $photocopy = $request->input('photocopy');
        $passport = $request->input('passport');
        $graphic = $request->input('graphic');
        $others = $request->input('others');
        $expenses = $request->input('expenses');
        $income = $request->input('income');

        $postaccount = new Postaccount();
        $postaccount -> reg = $reg;
        $postaccount -> typing = $typing;
        $postaccount -> photocopy = $photocopy;
        $postaccount -> passport = $passport;
        $postaccount -> graphic = $graphic;
        $postaccount -> others = $others;
        $postaccount -> expenses = $expenses;
        $postaccount -> income = $income;
        $postaccount -> save();

        $status = "Account Data Successfully Added";

        return redirect('record')->with('status',$status);
    }

    public function readPost($id){
        $postaccount = Postaccount::find($id);

        return view('posts.readrecord')->withPost($postaccount);
    }

    public function editrecord($id){
        $postaccount = Postaccount::find($id);

        return view('posts.editrecord')->withPost($postaccount);
    }

    public function updatePost(Request $request, $id){

        $reg = $request->input('reg');
        $typing = $request->input('typing');
        $photocopy = $request->input('photocopy');
        $passport = $request->input('passport');
        $graphic = $request->input('graphic');
        $others = $request->input('others');
        $expenses = $request->input('expenses');
        $income = $request->input('income');

        $postaccount = Postaccount::find($id);
        $postaccount -> reg = $reg;
        $postaccount -> typing = $typing;
        $postaccount -> photocopy = $photocopy;
        $postaccount -> passport = $passport;
        $postaccount -> graphic = $graphic;
        $postaccount -> others = $others;
        $postaccount -> expenses = $expenses;
        $postaccount -> income = $income;
        $postaccount -> save();

        $status = "Account Data Successfully Updated";

        return redirect('record')->with('status',$status);
    }

    public function deletePost($id){
        $postaccount = Postaccount::find($id);

        $postaccount -> delete();

        $status = "Account Data Successfully Deleted";

        return redirect('record')->with('status',$status);
    }
    

}
