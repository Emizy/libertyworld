<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/exam_wecome', function () {
    return view('exam_wecome');
});

Route::get('/quizpage', function () {
    return view('quizpage');
});

Route::get('/timer', function () {
    return view('timer');
});

Route::get('/Upload_Results', function () {
    return view('/Upload_Results');
})->middleware('auth');

Route::get('/CheckResult', function () {
    return view('/CheckResult');
})->middleware('auth');

Route::get('/ViewForm', function () {
    return view('/ViewForm');
})->middleware('auth');

Route::get('/CheckResult', 'ProfileController@getcheckresult')->middleware('auth');

Route::post('UploadResult','ProfileController@UploadResult')->middleware('auth');

Route::get('generatepdf','DownloadController@generatePDF');

Route::get('viewfile', function () {
    return view('download.viewfile');
})->middleware('auth');

Route::get('down_post', function () {
    return view('download.down_post');
})->middleware('auth');

Route::post('/UploadDoc', 'DownloadController@UploadDoc')->middleware('auth');

Route::get('viewAlldownloadfile', 'DownloadController@downfunc')->middleware('auth');

Route::get('/QuizApp', function () {
    return view('QuizApp');
});


Route::get('/product', function () {
    return view('product');
});
Route::get('/PrintReceipt', function () {
    return view('PrintReceipt');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('student_passport', function () {
    return view('student_passport');
});

Route::get('/student_form', function () {
    return view('student_form');
})->middleware('auth');

Route::get('/studentform', 'StudentController@StudInfo');

Route::get('student_ID', 'StudentController@student_ID')->middleware('auth');

Route::get('Student_List', 'StudentController@Student_List')->middleware('auth');

//Order Items route
Route::get('/buy_cards', 'OrderController@buy_cards')->middleware('auth');

Route::post('/OrderCard', 'OrderController@OrderCard')->middleware('auth');
Route::post('/payment', 'PaymentController@pay')->middleware('auth');


//Route::get('/buy_data', 'OrderController@buy_data')->middleware('auth');

//Route::post('/OrderData', 'OrderController@OrderData')->middleware('auth');

Route::post('/StudData', [
    'uses' => 'StudentController@postStudData',
    'as' => 'StudData'
]);

Route::post('/StudPassport', [
    'uses' => 'StudentController@StudPassport',
    'as' => 'StudPassport'
]);

Route::get('/SubmitForm', [
    'uses' => 'StudentController@show',
    'as' => 'show'
])->middleware('auth');

Route::get('/student_fees', [
    'uses' => 'StudentController@student_fees',
    'as' => 'student_fees'
])->middleware('auth');

Route::post('/receipt', 'StudentController@postreceipt')->middleware('auth');

// Route::get('/PrintReceipt', 'StudentController@ShowReceipt')->middleware('auth');

Route::get('/Confirm_payment', 'StudentController@Confirm_payment')->middleware('auth');

//Student Access page
Route::get('/access', function()
{
    return view('access');
})->middleware('auth');

Route::get('/AccessAccount', function()
{
    return view('AccessAccount');
})->middleware('auth');

Route::get('/yes',['as'=>'checkCode','uses'=>'StudentController@checkCode'])->middleware('auth');

Route::get('/pin',['as'=>'AccessCode','uses'=>'StudentController@AccessCode'])->middleware('auth');

Route::get('/GenerateAccess', 'StudentController@GenerateAccess');

Route::post('/addAccessCode', 'StudentController@addAccessCode');

Route::get('/account', [
    'uses' => 'PageController@show',
    'as' => 'shows'
])->middleware('auth');

Route::get('record', 'PageController@getRecord')->middleware('auth');

Route::get('/Createaccount', 'PageController@getCreateaccount')->middleware('auth');

Route::post('/Createaccount/store', 'PostaccountController@storePost')->middleware('auth');

Route::get('/readPost/{id}', 'PostaccountController@readPost');

Route::get('/editrecord/{id}', 'PostaccountController@editrecord');

Route::post('/update/{id}', 'PostaccountController@updatePost');

Route::get('/delete/{id}', 'PostaccountController@deletePost');

// Student Database Record goes here...

Route::get('stud_post', 'AccountController@stud_post');

Route::get('/account/{id}', 'AccountController@stud_post');

//End here

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post')->middleware('auth');

Route::group(['middleware'=>'auth'], function(){
Route::get('/platform', 'PostController@platform');

Route::get('/profile', 'ProfileController@profile');

Route::get('/category', 'CategoryController@category');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('/addPost', 'PostController@addPost');

Route::get('/view/{id}', 'PostController@view');

Route::get('/edit/{id}', 'PostController@edit');

Route::post('/editPost/{id}', 'PostController@editPost');

Route::get('/delete/{id}', 'PostController@deletePost');

Route::get('/category/{id}', 'PostController@category');

Route::get('/like/{id}', 'PostController@like');

Route::get('/dislike/{id}', 'PostController@dislike');

Route::post('/comment/{id}', 'PostController@comment');

Route::post('/search', 'PostController@search');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
        Route::get('/dashboard','Admin\AdminController@index');
        Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
        Route::get('/home','Admin\AdminController@admin_dashboard')->name('admin.home');
        
        Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
        Route::get('logout/', 'Admin\LoginController@logout')->name('admin.logout');


        Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
        Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::get('/dashboard', 'PaymentController@dashboard');
Route::post('/checkout', 'PaymentController@checkout')->name('checkout');
Route::get('/checkout', 'PaymentController@showcheckout')->name('checkout');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/transaction', 'TransactionController@show');
Route::get('/all_transaction', 'TransactionController@alltransaction')->name('all_transaction');
Route::get('/data_transaction', 'TransactionController@data_transaction')->name('datatransaction');
Route::get('/userscratch','TransactionController@ScratchTransaction')->name('scratchtransaction');
Route::get('/cardcheck','TransactionController@checkshow')->name('checkcard');
Route::post('/verify_card','TransactionController@check')->name('verify_card');

Route::get('/index','RealController@index')->name('index');
// route for waec,neco,waec gce card
Route::get('/waec','ScatchCardController@GetWaec')->name('waec');
Route::get('/neco','ScatchCardController@GetNeco')->name('neco');
Route::get('/waecgce','ScatchCardController@GetWaecGce')->name('waecgce');
Route::get('/ScratchCardAll', 'ScatchCardController@ScratchCardAll')->name('ScratchCardAll');
Route::get('/transerror','ScatchCardController@Gettranserror')->name('transerror');
Route::get('/TransError', function () {
    return view('TransError');
});
Route::get('/Scratch', function () {
    return view('Scratch');
});

//Uploads Cards
Route::get('/InsertWaecCards', 'ScatchCardController@InsertWaecCards');
Route::get('/InsertNecoCards', 'ScatchCardController@InsertNecoCards');
Route::get('/InsertNecoGCECards', 'ScatchCardController@InsertNecoGCECards');

Route::post('/UploadWaec', 'ScatchCardController@UploadWaec');
Route::post('/UploadNeco', 'ScatchCardController@UploadNeco');
Route::post('/UploadNecoGCE', 'ScatchCardController@UploadNecoGCE');

Route::get('/DownloadFile', function () {
    return view('DownloadFile');
});

Route::get('/download', function(){
    $file = public_path()."/Liberty_Handout.pdf";
    $headers = array(
        'Content-type: application/pdf',
    );
    return Response::download($file, "Liberty Handout.pdf", $headers);
});

Route::get('/file','DownloadController@index')->name('viewfile');
Route::get('/file/upload','DownloadController@create')->name('formfile');
Route::post('/file/upload','DownloadController@store')->name('uploadfile');
Route::delete('/file/{id}','DownloadController@destroy')->name('deletefile');
Route::get('/file/download/{id}','DownloadController@show')->name('downloadfile');


