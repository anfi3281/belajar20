<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murids;
use App\Models\orangtua;

class muridController extends Controller
{
    public function index(){
        $murids = murids::paginate(5);
        $jenis = 1;
        return view('murid.murid', ['anak' => $murids, 'jenis' =>$jenis]);
    }

    public function tampilanInput(){
        $jenis = 2;
        return
        view('murid.murid', ['jenis' =>$jenis]);
    }

    public function trash(){
        $murids = murids::onlyTrashed()->paginate(5);
        $orangtua = orangtua::onlyTrashed()->paginate(5);
        $jenis = 3;
        return view('murid.murid', ['jenis' =>$jenis, 'anak' => $murids, 'orangtua' => $orangtua]);
    }

    public function editView($id){
        $murids = murids::where('id', $id)->get();
        $jenis = 4;
        return view('murid.murid', ['jenis' =>$jenis, 'anak' => $murids]);
    }

    public function inputProcess(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        murids::create([
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

        $murids = murids::find($id);
        $murids->nama = $request->nama;
        $murids->alamat = $request->alamat;
        $murids->save();

        return redirect('/murid');
    }

    public function hapusProcess($id){
        $murids = murids::find($id);
        $murids->delete();
        $orangtua = orangtua::where('murids_id',$id);
        $orangtua->delete();
        return redirect('/murid');
    }

    public function restore($id){
        $murids = murids::onlyTrashed()->where('id', $id);
        $murids->restore();
        $orangtua = orangtua::onlyTrashed()->where('id', $id);
        $orangtua->restore();
        return redirect('/murid/trash');
    }

    public function deletePermanent($id){
        $murids = murids::onlyTrashed()->where('id', $id);
        $murids->forceDelete();
        return redirect('/murid/trash');
    }

    public function deleteAll(){
        $murids = murids::onlyTrashed();
        $murids->forceDelete();
        $orangtua = orangtua::onlyTrashed();
        $orangtua->forceDelete();
        return redirect('/murid/trash');
    }

    public function restoreAll(){
        $murids = murids::onlyTrashed();
        $murids->restore();
        $orangtua = orangtua::onlyTrashed();
        $orangtua->restore();
        return redirect('/murid');
    }
}
