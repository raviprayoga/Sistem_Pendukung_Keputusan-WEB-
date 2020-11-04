<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
     // dashboard
     public function getDashboard(){
        
        $users = DB::table('user')->get();
        return view('admin.admin_view.dashboard', ['users' => $users]);
    }
    public function getMatkul_Wajib(){
        $matkul = DB::table('matkul_wajib')->get();
        return view('admin.admin_view.matkul_wajib', ['matkul_wajib' => $matkul]);
    }
    public function getMatkul_Pilihan(){
        return view('admin.admin_view.dashboard');
    }
}
