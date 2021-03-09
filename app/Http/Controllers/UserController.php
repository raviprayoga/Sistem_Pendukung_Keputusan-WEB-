<?php

namespace App\Http\Controllers;

use App\Model_matkul_wajib;
use App\Model_matkul_pilihan;
use App\model_matkul_wajib_user;
use App\ModelUser;
use App\User;
// use App\User;
// use App\Model_matkul_wajib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // first_landing
    public function landing(){
        return view('Home.Landing1');
    }
    public function about(){
        return view('landing.about');
    }
    public function metode(){
        return view('landing.metode');
    }
    // profile
    public function profile(){
        $tampil = Auth::user()->makul_wajib;
        return view('Home.profile', compact('tampil'));
    }

    // Login
    public function login(){
        return view('Auth.login');
    }
    public function loginpost(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login');
    }
    // logout
    public function Logout( Request $request){
       $request->session()->flush();
        return redirect('/');
    }
    // SignUp
    public function getSignUp( Request $request){
        $regis = User::get();
        return view('Auth.regis');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'nim' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->nim  = $request->nim;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/login')->with('alert-success','Kamu berhasil Register');
    }
    // Home
    public function getHome(){
        $users = DB::table('users')->get();
        $users = User::all();
        return view('Home.Landing',  ['users' => $users]);
    }
    // About
    public function getAbout(){
        return view('Home.About');
    }
    // metode
    public function getMetode(){
        return view('Home.Metode');
    }
    
    // input_nilai
    public function getInput($id){
        $users = \App\User::find($id);
        $matkul = \App\Model_matkul_wajib::all();
        return view('Form.input_nilai_user', ['users' => $users , 'matkul_wajib' => $matkul]);
    }
    // nilai
    public function tambahnilai(Request $request,$idusers){
        // $data = $request->all();
        // dd($data);
        $users = \App\User::find($idusers);
        foreach((array)$request->matkul as $key=>$matkul){
            $data = new model_matkul_wajib_user();
            $data->model_matkul_wajib_id = $matkul;
            $data->user_id = $idusers;
            $data->nilai = $request->nilai[$key];
            $data->save();
        }
        // $users->matkul_wajib()->attach($request->matkul,['nilai' => $request->nilai]);
        return redirect('/rekomendasi');
    }
    // rekomendasi
    public function getrekomendasi(){
        $matkul = \App\Model_matkul_pilihan::all();
        return view('Home.rekomendasi', ['matkul_pilihan' => $matkul]);
    }

}
