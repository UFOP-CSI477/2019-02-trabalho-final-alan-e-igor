<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use Illuminate\Support\Facades\Hash;

class TccController extends Controller
{
    public function index(){
        $ofertas = Oferta::all();

        return view('tccs.ofertas_tcc', compact('ofertas'));
    }

    public function criar($id){
        
        //$dados =  Oferta::find($id);
        //dd($dados);
        //$oferta = Oferta::all();
        $oferta = Oferta::find($id);

        return view('tccs.create', compact('oferta'));
    }

    public function inscricao($id)
    {

        
        return view('tccs.inscricao');
    }

}
