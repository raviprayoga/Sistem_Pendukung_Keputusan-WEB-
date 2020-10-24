<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Home
Route::get('/',[
    'uses' => 'UserController@getHome',
    'as' => 'home'
]);
// login
Route::get('/Login',[
    'uses' => 'UserController@getLogin',
    'as'  => 'login'
]);
// SignUp
Route::get('/SignUp',[
    'uses' => 'UserController@getSignUp',
    'as'  => 'signup'
]);
// About
Route::get('/AboutUs',[
    'uses' => 'UserController@getAbout',
    'as'  => 'about'
]);
// input nilai
Route::get('/Input_Nilai',[
    'uses' => 'UserController@getInput',
    'as'   => 'input'
]);
// metode
Route::get('/Metode_Perhitungan',[
    'uses' => 'UserController@getMetode',
    'as'   => 'metode'
]);

