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
Route::post('/loginPost', 'UserController@loginPost');

// SignUp
Route::get('/SignUp',[
    'uses' => 'UserController@getSignUp',
    'as'  => 'signup'
]);
Route::post('/registerPost', 'UserController@registerPost');

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


// admin dashboard
Route::get('/dashboard',[
    'uses' => 'AdminController@getDashboard',
    'as'   => 'dashboard'
]);

Route::get('/matakuliah_wajib',[
    'uses' => 'AdminController@getMatkul_Wajib',
    'as'   => 'matkul_wajib'
]);
Route::get('/matakuliah_pilihan',[
    'uses' => 'AdminController@getMatkul_Pilihan',
    'as'   => 'matkul_pilihan'
]);