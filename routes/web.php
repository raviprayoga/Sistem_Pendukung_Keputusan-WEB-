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
    Route::get('/AboutUs', function(){
        if(session('berhasil_login')){
            return view('Home.About');
        }else{
            return redirect('/');
        }
    });

    // home
    Route::get('/home', 'UserController@getHome')->middleware('CekLoginMiddleware');   
    // metode
    Route::get('/Metode_perhitungan', 'UserController@getMetode')->middleware('CekLoginMiddleware');   
    // input nilais
    Route::get('/Input_Nilai', 'UserController@getInput')->middleware('CekLoginMiddleware');


Route::get('/','UserController@getLogin')->name('login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('Logout','UserController@Logout')->name('logout');

// SignUp
Route::get('/SignUp',[
    'uses' => 'UserController@getSignUp',
    'as'  => 'signup'
]);
Route::post('/registerPost', 'UserController@registerPost');

// admin dashboard
Route::get('/dashboard', 'AdminController@getDashboard');
// hapus user
Route::get('/upload_user/hapus_user/{id}', 'AdminController@hapus_user');
// edit user
Route::get('/upload_user/proses_edit_user/{id}','AdminController@edit_user');
Route::post('/upload_user/update_user/{id}','AdminController@update_user');

// admin matkul_wajib
// menampilkan matkul wajib
Route::get('/matakuliah_wajib', 'AdminController@getMatkul_Wajib');
// create matkul wajib
Route::get('/matakuliah_wajib', 'AdminController@uploadMatkulWajib');
Route::post('/upload_matkul_wajib/proses_upload_matkul_wajib', 'AdminController@proses_upload_matkul_wajib');
// hapus matkul wajib
Route::get('/upload_matkul_wajib/hapus_matkul_wajib/{id}', 'AdminController@hapus_matkul_wajib');
// edit matkul wajib
Route::get('/upload_matkul_wajib/proses_edit_matkul_wajib/{id}','AdminController@edit_matkul_wajib');
Route::post('/upload_matkul_wajib/update_matkul_wajib/{id}','AdminController@update_matkul_wajib');

// admin matkul_piihan
Route::get('/matakuliah_pilihan', 'AdminController@getMatkul_Pilihan');
// create matkulpilihan
Route::get('/matakuliah_pilihan', 'AdminController@uploadMatkulpilihan');
Route::post('/upload_matkul_pilihan/proses_upload_matkul_pilihan', 'AdminController@proses_upload_matkul_pilihan');
// hapus matkulpilihan
Route::get('/upload_matkul_pilihan/hapus_matkul_pilihan/{id}', 'AdminController@hapus_matkul_pilihan');
// edit matkulpilihan
Route::get('/upload_matkul_pilihan/proses_edit_matkul_pilihan/{id}','AdminController@edit_matkul_pilihan');
Route::post('/upload_matkul_pilihan/update_matkul_pilihan/{id}','AdminController@update_matkul_pilihan');