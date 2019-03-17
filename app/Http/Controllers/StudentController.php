<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\StudForm;
use App\Receipt;
use App\Access;
use App\AccountCode;
use App\Postaccount;
use Auth;

class StudentController extends Controller
{
      function __construct()
    {
        $this->middleware('auth');
    }

    

     public function Student_List()
    {
        $StudForms= studform::all();
        return view('Student_List', ['StudForms' => $StudForms]);
    }

     public function student_ID()
    {
        return view('student_ID');
    }

    public function edit_student_record()
    {
        return view('stud_database.edit_student_record');
    }
    
    public function edit_record($id)
    {
        $account = Account::find($id);
        return view('stud_database.edit_student_record',compact('account'));
    }

    public function update(Request $request, $id)
    {
        $account = Account::find($id);
        $account-> fullname = $request->input('fullname');
        $account-> address = $request->input('address');
        $account-> telephone = $request->input('telephone');
        $account-> email = $request->input('email');
        $account-> gender = $request->input('gender');
        $account-> age = $request->input('age');
        $account-> program = $request->input('program');
        $account-> origin = $request->input('origin');
        $account-> lga = $request->input('lga');
        $account-> town = $request->input('town');
        $account-> pfullname = $request->input('pfullname');
        $account-> ptelephone = $request->input('ptelephone');
        $account-> relationship = $request->input('relationship');
        $account->update();

        return redirect('/Student_List');
    }

    public function getstud_post()
    {
        return view('stud_database.stud_post');
    }
    public function stud_post($id){
        $StudForm = StudForm::find($id);

        return view('stud_database.stud_post')->withPost($StudForm);
    }
/*
    //Save the images to the storage path...
    public function StudData(Request $request)
    {
        $account= $request ->file('passport');
        $upload= 'upload/images';
        $filename= $image->getClientOriginalName();
        Storage::put('upload/images/'.$filename,filename,file_get_contents($request->file('passport')->getRealPath()));

        $accounts= new passport;
        $accounts->passport= $filename;
        $accounts->save();

        return redirect('SubmitForm');
    }
*/
    //Display all the images in the database
    public function home()
    {
        $StudForms= Account::all();
        return view('SubmitForm', ['StudForms'=>$StudForms]);

    }

    public function getRegister()
    {
        return view('home');
    }
    public function getLogin()
    {
        return view('home');
    }

    public function getAccount()
    {

        return view('Account')->with('posts');
    }
    public function getAdmission()
    {
        return view('admission');
    }
    public function getCreate()
    {
        return view('create');
    }

    public function postStudData(Request $request){
        $this->validate($request, [
            'fullname' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'program' => 'required',
            'payment' => 'required',
            'amount' => 'required',
            'av_balance' => 'required',
            'origin' => 'required',
            'lga' => 'required',
            'town' => 'required',
            'pfullname' => 'required',
            'paddress' => 'required',
            'ptelephone' => 'required',
            'relationship' => 'required',
            'passport' => 'required'
        ]);

        $fullname = $request['fullname'];
        $address = $request['address'];
        $telephone = $request['telephone'];
        $email = $request['email'];
        $gender = $request['gender'];
        $age = $request['age'];
        $program = $request['program'];
        $payment = $request['payment'];
        $amount = $request['amount'];
        $av_balance = $request['av_balance'];
        $origin = $request['origin'];
        $lga = $request['lga'];
        $town = $request['town'];
        $pfullname = $request['pfullname'];
        $paddress = $request['paddress'];
        $ptelephone = $request['ptelephone'];
        $relationship = $request['relationship'];
        $passport = $request['passport'];



        $user = new StudForm();
        $user->user_id = Auth::user()->id;
        $user->fullname = $fullname;
        $user->address = $address;
        $user->telephone = $telephone;
        $user->email = $email;
        $user->gender = $gender;
        $user->age = $age;
        $user->program = $program;
        $user->payment = $payment;
        $user->amount = $amount;
        $user->av_balance = $av_balance;
        $user->origin = $origin;
        $user->lga = $lga;
        $user->town = $town;
        $user->pfullname = $pfullname;
        $user->paddress = $paddress;
        $user->ptelephone = $ptelephone;
        $user->relationship = $relationship;
        $user->passport = $passport;

        $user -> save();
        if(Input::hasFile('passport'))
        {
            $file = Input::file('passport');
            $file->move("uploads/", $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads/' . $file->getClientOriginalName();

        }
        $user->passport = $url;
        $user->save();
        $status = "Student Account Created Successfully!";
        return redirect()->route('show');

    }

    

    public function show(){
        //$user = Account::all();

       $user = DB::table('stud_forms')->latest()->first();

        return view('SubmitForm',compact('user'));
    }

    public function student_fees()
    {
        return view('student_fees');
    }

    public function postreceipt(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'gender' => 'required',
            'program' => 'required',
            'amount' => 'required'
            
        ]);

        $name = $request['name'];
        $email = $request['email'];
        $address = $request['address'];
        $telephone = $request['telephone'];
        $gender = $request['gender'];
        $program = $request['program'];
        $amount = $request['amount'];

        $receipt = new Receipt();
        $receipt->name = $name;
        $receipt->email = $email;
        $receipt->address = $address;
        $receipt->telephone = $telephone;
        $receipt->gender = $gender;
        $receipt->program = $program;
        $receipt->amount = $amount;

        $receipt -> save();

        return view('Confirm_payment');    
    }
    
    public function Confirm_payment()
    {
        return view('Confirm_payment');
    }

    public function checkCode(Request $request)
    {
        $status = Access::where('code', $request->code)->first();

        if($status == null)
        {
            return redirect()->back()->with ('error', 'invalid access code, please enter a valid access code.');
        }
        else
        {
            return view('student_form');
        }
        
    }

    public function GenerateAccess()
    {
        return view('GenerateAccess');
    }
    
    public function addAccessCode(Request $request)
    {
        $this->validate($request, [
            'code' => 'required'
        ]);
        $access = new Access;
        $access->code = $request->input('code');
        $access->save();
        return redirect('/GenerateAccess')->with('response', 'Access Code added Successfully');
    }

    public function AccessCode(Request $request)
    {
        $status = Access::where('code', $request->code)->first();

        if($status == null)
        {
            return redirect()->back()->with ('error', 'invalid access code, please enter a valid access code.');
        }
        else
        {
            return view('/record');
        }
        
    }

    
}
