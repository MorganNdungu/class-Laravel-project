<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function() {
    return view('index');

});



Route::view('/signup','signup' );

Route::view('/login', 'login')->name('login');


Route::post('/signup', [Controller::class,'store'] );
Route::post('/login', [Controller::class,'login'] ) ->name('User.login');
Route::get('/logout', [Controller::class,'logout'] ) ->name('User.logout');

Route::group(['middleware'=>'auth'], function(){
    Route::view('/dashboard', 'dashboard');

});



