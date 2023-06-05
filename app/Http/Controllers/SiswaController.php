<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    public function index(){
        session_start();
        $_SESSION['kelola'] = 1;
        $siswa = Siswa::paginate(2);
        return view('siswa', ['siswa' => $siswa]);
    }

    public function input(){
        session_start();
        $_SESSION['kelola'] = 1;
        return view('kelola', ['kelola' => $_SESSION['kelola']]);
    }

    public function edit($id){
        session_start();
        $siswa = Siswa::find($id);
        $_SESSION['kelola'] = 2;
        return view('kelola', ['kelola' => $_SESSION['kelola'], 'id' => $id, 'siswa' => $siswa]);
    }

    public function delete($id){
        $siswa = Siswa::where("id", $id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function inputProcess(Request $request){
        if(isset($request->kembali)){
        return redirect('/siswa');
        }
    }

    public function kelola($id, request $request){
        if(isset($request->input)){
            $this->validate($request, [
                'nama' => 'required',
                'alamat' => 'required'
            ]);

            Siswa::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat
            ]);
        return redirect('/siswa');
        }

        if(isset($request->edit)){
            $this->validate($request, [
                'nama' => 'required',
                'alamat' => 'required'
            ]);

            $siswa = Siswa::find($id);
            $siswa->nama = $request->nama;
            $siswa->alamat = $request->alamat;
            $siswa->save();
        return redirect('/siswa');
        }
    }
}
