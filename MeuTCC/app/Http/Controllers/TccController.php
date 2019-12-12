<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tcc;

class TccController extends Controller
{
    public function index(){
        $tcc = Tcc::all();
        return view('tccs.tccs', compact('tcc'));
    }

    public function criar(){
        $tcc = Tcc::all();
        return view('tccs.create');
    }
}
