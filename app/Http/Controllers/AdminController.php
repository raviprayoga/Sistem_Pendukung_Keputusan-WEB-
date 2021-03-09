<?php

namespace App\Http\Controllers;

use App\Model_matkul_wajib;
use App\Model_matkul_pilihan;
use App\model_matkul_wajib_user;
use App\ModelUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
     // dashboard
     public function getDashboard(){
        $users = DB::table('users')->get();
        return view('admin.admin_view.dashboard', ['users' => $users]);
    }

    public function edit(){
        return view('admin.admin_view.edituser');
    }

        // hapus data
        public function hapus_user($id){
                User::where('id',$id)->delete();
                return redirect()->back();
        }

        // public function edit_user($id){
        //     // mengambil data berdasarkan id yang dipilih
        //     $user = User::find($id)->first();
        //     // passing data user yang didapat ke view 
        //     return view('admin.admin_view.dashboard',['user' => $user]);
        // }

        
        // update data user
        public function update_user(Request $request)
        {
            $user = User::findOrFail($request->id);
            $user->update($request->all());
            return back();
        }

    // matkul wajib
    // tampilkan data from database matkul_wajib
    public function getMatkul_Wajib(){
        $matkul = DB::table('matkul_wajib')->get();
        return view('admin.admin_view.matkul_wajib', ['matkul_wajib' => $matkul]);
    }
            // upload matkul
            public function uploadMatkulWajib(){
                $matkul = Model_matkul_wajib::get();
                return view('admin.admin_view.matkul_wajib',['matkul_wajib' => $matkul]);
            }
            public function proses_upload_matkul_wajib(Request $request){
                $this->validate($request, [
                    'nama_matkul_wajib' => 'required',
                    'kode_mk' => 'required',
                    'sks' => 'required',
                    'semester' => 'required',
                    
                ]);
                
                Model_matkul_wajib::create([
                    'nama_matkul_wajib' => $request->nama_matkul_wajib,
                    'kode_mk' => $request->kode_mk,
                    'sks' => $request->sks,
                    'semester' =>$request->semester,
                ]);
                return redirect()->back();
            }
            // hapus data
            public function hapus_matkul_wajib($id){
                    Model_matkul_wajib::where('id',$id)->delete();
                    return redirect()->back();
            }
            
            // public function edit_matkul_wajib($id){
            //     // mengambil data berdasarkan id yang dipilih
            //     $matkul = Model_matkul_wajib::find($id);
            //     // passing data matkul yang didapat ke view 
            //     return view('admin.admin_view.matkul_wajib',['matkul_wajib' => $matkul]);
            // }
            // update data matkul
            public function update_matkul_wajib(Request $request)
            {
                $matkul = Model_matkul_wajib::findOrFail($request->id);
                $matkul->update($request->all());
                return back();
            }


    // matkul pilihan
    public function getMatkul_Pilihan(){
        $matkul = DB::table('matkul_pilihan')->paginate(3);
        return view('admin.admin_view.matkul_pilihan', ['matkul_pilihan' => $matkul]);
    }
    // upload matkul
    public function uploadMatkulpilihan(){
        $matkul = Model_matkul_pilihan::get();
        return view('admin.admin_view.matkul_pilihan',['matkul_pilihan' => $matkul]);
    }
    public function proses_upload_matkul_pilihan(Request $request){
        $this->validate($request, [
            'nama_matkul_pilihan' => 'required',
            'kode_mk' => 'required',
            'sks' => 'required',
            'semester' => 'required',
            'silabus' => 'required',
            
        ]);
        
        Model_matkul_pilihan::create([
            'nama_matkul_pilihan' => $request->nama_matkul_pilihan,
            'kode_mk' => $request->kode_mk,
            'sks' => $request->sks,
            'semester' =>$request->semester,
            'silabus' =>$request->silabus,
        ]);
        return redirect()->back();
    }
    // hapus data
    public function hapus_matkul_pilihan($id){
            Model_matkul_pilihan::where('id',$id)->delete();
            return redirect()->back();
    }
    
    // public function edit_matkul_pilihan($id){
    //     // mengambil data berdasarkan id yang dipilih
    //     $matkul = Model_matkul_pilihan::find($id);
    //     // passing data matkul yang didapat ke view 
    //     return view('admin.admin_view.matkul_pilihan',['matkul_pilihan' => $matkul]);
    // }
    // update data matkul
    public function update_matkul_pilihan(Request $request)
    {
        $matkul = Model_matkul_pilihan::findOrFail($request->id);
        $matkul->update($request->all());
        return back();
    }

    public function profile($id){
        $users = \App\User::find($id);
        $matkul = \App\Model_matkul_wajib::all();
        return view('admin.admin_view.profil_nilai', ['users' => $users, 'matkul' => $matkul]);
    }
    public function addnilai(Request $request,$idusers){
        $users = \App\User::find($idusers);
        $users->matkul_wajib()->attach($request->matkul,['nilai' => $request->nilai]);
        return redirect('user/' .$idusers. '/profile');
    }

//     public function update_nilai(Request $request)
//     {
//         dd($request->all());
//         $nilai = Model_matkul_wajib_user::findOrFail($request->id);
//         $nilai->update($request->all());
//         return back();
//     }
//     public function hapus_nilai($id,Request $request){
        
//         model_matkul_wajib_user::where('id',$id)->delete();
//         dd($request->all());
//         return redirect()->back();
// }
}
