<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Login
    public function getLogin(){
        return view('Auth.login');
    }
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                session(['berhasil_login' => true]);
                return redirect('/home')->with('alert', 'Berhasil Login');
            }
            else{
                return redirect('/')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert','Password atau Email, Salah!');
        }
    }

    // logout
    public function Logout( Request $request){
       $request->session()->flush();
        return redirect('/');
    }
    // SignUp
    public function getSignUp( Request $request){
        $regis = ModelUser::get();
        return view('Auth.regis');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'nim' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
        ]);

        $data =  new ModelUser();
        $data->nama = $request->nama;
        $data->nim  = $request->nim;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/')->with('alert-success','Kamu berhasil Register');
    }

    // Home
    public function getHome(){
        $user = DB::table('user')->get();
        return view('Home.Landing',  ['user' => $user]);
    }
    // About
    public function getAbout(){
        return view('Home.About');
    }
    //input_nilai
    public function getInput(){
        $matkul = DB::table('matkul_wajib')->get();
        return view('Form.input_nilai_user', ['matkul_wajib' => $matkul]);
    }
    // metode
    public function getMetode(){
        return view('Home.Metode');
    }
}
