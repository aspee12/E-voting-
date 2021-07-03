<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ListCandidateResult;
use App\Http\Controllers\VoterController;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Declareresult;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\MenifestoController;
use App\Http\Controllers\ResultDeclare;
use App\Http\Controllers\ProfileControlle;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DeclareresultController;



// use App\Http\Controllers\Admin\DashboardController;
use App\User;
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


// Route::get('/declare','ResultDeclareController@makepublic');
// welcomePage

Route::get('/','ResultController@menifestoview');
// navbar
Route::view('/candidate', 'Navbarpages.candidate');
Route::view('/functionality','Navbarpages.functionality');
Route::view('/features', 'Navbarpages.features');
Route::view('/About', 'Navbarpages.About');
// end of nav bar
//election form route
Route::view('/new','election.new');
// Welcome page HOME
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Amdin auth Route
Route::get('/Dashboard', [HomeController::class, 'index']);
Route::get('/main', [HomeController::class, 'main'])->name('main');

// after auth admin dashboard route
Route::group(['middleware'=>['auth','admin']],function(){
    // admin route CRUD0
    Route::get('/role','Admin\DashboardController@registered');
    Route::get('/admin/edit/{id}','Admin\DashboardController@registeredit')->name('admin.edit');
    Route::put('/register-update/{id}','Admin\DashboardController@registerupdate');
    // Route::put('/admin-update/{id}','Admin\DashboardController@adminupdate');
    Route::delete('/delete/{id}','Admin\DashboardController@registerdelete')->name('admin.delete');
    //ballot route for admin
    Route::resource('ballot','CandidateController');
    //home for the admin routing
    Route::get('/listcandidate','ListCandidateResult@display');
    //Admin Menifesto upload route
    Route::resource('menifesto','MenifestoController');
    //Amdim View result Route
    Route::get('/adminresults','ResultController@adminresult')->name('admin.result');
    //admin register route
    Route::get("admin", [AdminRegisterController::class, 'create']);
    Route::post("user/create", [AdminRegisterController::class, 'store']);

});

//Voter route

Route::view('/voterdash','voters.voter');
//User not valide by Administator route

// Live route
Route::view('/election', 'live');

// Voter Voting page route
Route::get('/votting','VoterController@voting')->name('succ.vote');
Route::post('/vote','VoterController@canditatevote');

//Result Route
Route::get('/voterresult','ResultController@result');
Route::post('/results', 'VoterController@votes')->name('vote.multi');
Route::post('/result', 'VoterController@vote')->name('vote.single');

//Route for candidate position
// Route::resource('position','PositionController');
Route::get('/create','PositionController@create');
Route::post('/post','PositionController@store');
Route::get('/edit/{id}','PositionController@edit');
Route::put('/update/{id}','PositionController@update');
Route::delete('/destroy/{id}','PositionController@destroy');

//Login route for user not verified


//voter view mefifesto route
Route::get('/menifesto','ResultController@menifesto');

//User profile change route
Route::get('/profile','ProfileController@userprofile')->name('profile');

//Change Password
Route::get('change-password','ChangePasswordController@index');
Route::post('change-password','ChangePasswordController@store')->name('change.password');
Route::get('/decleareresult','DeclareresultController@declarepublic');
Route::get('/notdecleareresult','DeclareresultController@makeprivate');

Route::post('testroute', function(Request $request) {
    $candidates = Candidate::all();
    foreach($candidates as $candidate) {
        $res = Declareresult::where('candidate_id', $candidate->id)->first();
        if($res) {
            $res->state = $request->input($candidate->id);
            $res->save();
        }
        else {

            Declareresult::create([
                'candidate_id' => $candidate->id,
                'state' =>  $request->input($candidate->id),
            ]);
        }
        
    }
    return back()->with('msg',"Result Declared Successfully");
});

//upload profile route
Route::get('/profileset/{id}','ProfileController@display')->name('profileset');
Route::post('/uploadprofle/{id}','ProfileController@upload')->name('uploadprofle');

//Contact us route
Route::get('/contact','ContactController@contact');
Route::post('/sendmail','ContactController@sendMail')->name('sendmail');


Route::group(['middleware'=>['auth','voter']],function(){
    //home route for the voter
});
Route::get('/voterhome','ListCandidateResult@voterdisplay');

//Route::view('/loggin','auth.login');


//Route::view('/error', 'erromesg');

//User route when they are not given role
Route::view('/userpage','userfirstpage');
