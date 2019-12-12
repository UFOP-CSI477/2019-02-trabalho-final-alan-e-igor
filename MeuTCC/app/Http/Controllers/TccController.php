<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tcc;
use App\User;
use Illuminate\Support\Facades\Hash;

class TccController extends Controller
{
    public function index(){
        $tcc = Tcc::all();
        return view('tccs.tccs', compact('tcc'));
    }

    public function create()
    {
        $usuarios = User::all();
        return view('tccs.tccs', compact('usuarios'));
    }

    public function save(array $data)
    {
        return Tcc::create([
            'name' => $data['name'],
            'area'=> $data[ 'area'],
            'ano' => $data['ano'],
            'semestre' => $data['semestre'],
            'aluno_id' =>$data['aluno_id'],
            'professor_id' =>$data['professor_id'],
            'arquivo' => $data['arquivo'],
        ]);
    }
}
