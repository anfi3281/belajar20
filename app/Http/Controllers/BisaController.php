<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BisaController extends Controller
{
    public function index(){
        return view('bisa.index');
    }
}
