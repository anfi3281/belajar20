<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
class EloquentController extends Controller
{
    public function nampilin(){
        $pegawai = Pegawai::paginate(5);
        return view('nampilin', ['pegawai' =>$pegawai]);
    }
}