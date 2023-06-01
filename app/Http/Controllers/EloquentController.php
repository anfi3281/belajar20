<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pegawai;
class EloquentController extends Controller
{
    public function nampilin(){
        $pegawai = Pegawai::paginate(5);
        return view('nampilin', ['pegawai' =>$pegawai]);
    }

    public function nampilinInput(){
        return view('nampilinInput');
    }

    public function nampilinInputProcess(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('nampilin');
    }

    public function nampilinEdit($id){
        return redirect('/nampilin');
    }
    public function nampilinHapus($id){
        return redirect('/nampilin');
    }
}
