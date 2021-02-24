<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCRUDController;
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

Route::get('/', function () {
    return view('main');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/Dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/main', [HomeController::class, 'main'])->name('main');

Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });

    Route::get('/role','Admin\DashboardController@registered');
    Route::get('/edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/delete/{id}','Admin\DashboardController@registerdelete');
});

Route::resource('posts', PostCRUDController::class);