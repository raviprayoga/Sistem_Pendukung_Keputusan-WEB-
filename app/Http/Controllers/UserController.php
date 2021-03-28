<?php

namespace App\Http\Controllers;

use App\Model_matkul_wajib;
use App\Model_matkul_pilihan;
use App\model_matkul_wajib_user;
use App\ModelUser;
use App\User;
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
            $data->nilai_huruf=$request->nilai_huruf[$key];
            if($data->nilai_huruf == "a" || $data->nilai_huruf == "A"){
                $data->nilai=4;
            }else if($data->nilai_huruf == "ab" || $data->nilai_huruf == "Ab" || $data->nilai_huruf == "AB" || $data->nilai_huruf == "aB"){
                $data->nilai=3.5;
            }else if($data->nilai_huruf == "b" || $data->nilai_huruf == "B"){
                $data->nilai = 3;
            }else if($data->nilai_huruf == "bc" || $data->nilai_huruf == "Bc" || $data->nilai_huruf == "BC" || $data->nilai_huruf == "bC"){
                $data->nilai = 2.5;
            }else if($data->nilai_huruf == "c" || $data->nilai_huruf == "C"){
                $data->nilai=2;
            }else if($data->nilai_huruf == "d" || $data->nilai_huruf == "D"){
                $data->nilai=1;
            }else if($data->nilai_huruf == "e" || $data->nilai_huruf == "E"){
                $data->nilai=0;
            }else{
                $data->nilai=0;
            }
            // bobot nilai
            if($data->nilai == 4){
                $data->bobot = 5;
            }else if($data->nilai == 3.5){
                $data->bobot = 4.5;
            }else if($data->nilai == 3){
                $data->bobot = 4;
            }else if($data->nilai == 2.5){
                $data->bobot = 3.5;
            }else if($data->nilai == 2){
                $data->bobot = 3;
            }else if($data->nilai == 1){
                $data->bobot = 2;
            }else if ($data->nilai == 0){
                $data->bobot = 1;
            }else{
                $data->bobot = 0;
            }
            $data->save();
        }
        return redirect('/{auth()->user()->name}/rekomendasi');
    }
    // profile
    public function profile(){
        $matkul = \App\Model_matkul_pilihan::all();
        $tampil = Auth::user()->makul_wajib;
        return view('Home.profile', compact('tampil'), ['matkul' => $matkul]);
    }
    // rekomendasi
    public function getrekomendasi($id){
        $users = \App\User::find($id);
        $tampil = Auth::user()->makul_pilihan;
        $matkulw = \App\Model_matkul_wajib::all();
        $matkul = \App\Model_matkul_pilihan::all();
        return view('Home.rekomendasi',compact('tampil') , ['users' => $users,'matkul' => $matkul]);
    }
    //keterangan matkul
    public function getKeterangan($id){
        $users = \App\User::find($id);
        $matkul = \App\Model_matkul_pilihan::find($id);
        return view('Home.Halaman_keterangan', ['users' =>$users ,'matkul' =>$matkul]);
    }

}
