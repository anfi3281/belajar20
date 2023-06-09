<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;

class MuridController extends Controller
{
    public function index(){
        $murid = murid::paginate(5);
        $jenis = 1;
        return view('murid.murid', ['anak' => $murid, 'jenis' =>$jenis]);
    }

    public function tampilanInput(){
        $jenis = 2;
        return
        view('murid.murid', ['jenis' =>$jenis]);
    }

    public function trash(){
        $murid = murid::onlyTrashed()->paginate(5);
        $jenis = 3;
        return view('murid.murid', ['jenis' =>$jenis, 'anak' => $murid]);
    }

    public function inputProcess(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        murid::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/murid/input');
    }

    public function hapusProcess($id){
        $murid = murid::find($id);
        $murid->delete();
        return redirect('/murid');
    }

    public function restore($id){
        $murid = murid::onlyTrashed()->where('id', $id);
        $murid->restore();
        return redirect('/murid/trash');
    }
}
