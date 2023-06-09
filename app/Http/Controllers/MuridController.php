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

    public function editView($id){
        $murid = murid::where('id', $id)->get();
        $jenis = 4;
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

    public function editProcess(Request $request,$id){
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $murid = murid::find($id);
        $murid->nama = $request->nama;
        $murid->alamat = $request->alamat;
        $murid->save();

        return redirect('/murid');
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

    public function deletePermanent($id){
        $murid = murid::onlyTrashed()->where('id', $id);
        $murid->forceDelete();
        return redirect('/murid/trash');
    }

    public function deleteAll(){
        $murid = murid::onlyTrashed();
        $murid->forceDelete();
        return redirect('/murid/trash');
    }

    public function restoreAll(){
        $murid = murid::onlyTrashed();
        $murid->restore();
        return redirect('/murid');
    }
}
