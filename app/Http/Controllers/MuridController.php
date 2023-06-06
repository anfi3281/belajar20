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
        return view('murid.murid', ['jenis' =>$jenis]);
    }
}
