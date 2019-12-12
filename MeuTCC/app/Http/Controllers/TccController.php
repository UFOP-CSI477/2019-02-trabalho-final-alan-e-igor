<?php

namespace App\Http\Controllers;

use App\Oferta;
use Illuminate\Http\Request;
use App\Tcc;
use App\User;
use App\Oferta;
use Illuminate\Support\Facades\Hash;

class TccController extends Controller
{
    public function index(){
        $ofertas = Oferta::all();

        return view('tccs.ofertas_tcc', compact('ofertas'));
    }

    public function criar(){
        $user = User::all();
        $tcc = Tcc::all();
        $prof = Oferta::all();
        return view('tccs.create', compact('prof'));
    }
}
