<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

    // first landing
    Route::get('/', 'UserController@landing');
    Route::get('/about', 'UserController@about');
    Route::get('/metode', 'UserController@metode');


//middleware
    // home
    Route::get('/home', 'UserController@getHome');   
    // metode
    Route::get('/Metode_perhitungan', 'UserController@getMetode');   
    // input nilai
    Route::get('/Input_Nilai/{id}/user', 'UserController@getInput');
    Route::post('/pengguna/{id}/tambahnilai', 'UserController@tambahnilai');
    // about
    Route::get('/AboutUs','UserController@getAbout');
    // rekomendasi
    Route::get('/{id}/rekomendasi', 'UserController@getrekomendasi');
    // profile
    Route::get('/profile/{id}/user', 'UserController@profile');
    //keterangan
Route::get('/{id}/keterangan', 'UserController@getKeterangan');
//end midleware

    Route::get('/login','UserController@login');
    Route::post('/loginpost','UserController@loginpost');
    Route::get('Logout','UserController@Logout')->name('logout');
    // SignUp
    Route::get('/SignUp',[
        'uses' => 'UserController@getSignUp',
        'as'  => 'signup'
    ]);
    Route::post('/registerPost', 'UserController@registerPost');

// ADMIN ROUTE
    // admin dashboard
    Route::get('/dashboard', 'AdminController@getDashboard');
    // hapus user
    Route::get('/upload_user/hapus_user/{id}', 'AdminController@hapus_user');
    // edit user
    Route::get('/upload_user/proses_edit_user/{id}','AdminController@edit_user');
    Route::post('/upload_user/update_user/{id}','AdminController@update_user');
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
    // profile nilai
    Route::get('user/{id}/profile', 'AdminController@profile');
    Route::post('user/{id}/add', 'AdminController@addnilai');
    // Route::post('/upload_nilai/update_nilai/{id}','AdminController@update_nilai');
    Route::get('/hapus_nilai/{id}', 'AdminController@hapus_nilai');
