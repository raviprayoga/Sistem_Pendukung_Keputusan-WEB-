<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
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
                Session::put('nama',$data->nama);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('');
            }
            else{
                return redirect('Login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('Login')->with('alert','Password atau Email, Salah!');
        }
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
        return redirect('Login')->with('alert-success','Kamu berhasil Register');
    }


    // Home
    public function getHome(){
        return view('Home.Landing');
    }
    // About
    public function getAbout(){
        return view('Home.About');
    }
    //input_nilai
    public function getInput(){
        return view('Form.input_nilai_user');
    }
    // metode\
    public function getMetode(){
        return view('Home.Metode');
    }
}
