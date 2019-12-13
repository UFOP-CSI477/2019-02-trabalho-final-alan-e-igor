<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Oferta;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

    public function inscricao(Request $professor_id, $id_oferta)
    {

        $professor_id = $professor_id->input('professor_id');
        
        $data = now();

        if($data->month >6){
            $semestre = '2';
        }else{
            $semestre = '1';
        }
        
        
        $oferta = Oferta::find($id_oferta);
          try{  
        DB::table('tccs')->insert([
            'titulo' => $oferta->titulo,
            'area' => $oferta->area,
            'ano' => $data->year,
            'semestre' => $semestre,
            'aluno_id' => Auth::user()->id,
            'professor_id' => $professor_id,
            'arquivo'=> null,
            'created_at' => now(),
            'updated_at' => now()
            ]);
        

        
        $dados = Oferta::find($id_oferta);
        $dados->delete();

        return redirect()->route('tcc');
        }catch(QueryException $e){

            return redirect()->route('home');
        }
    }

    public function createOffer(Request $professor_id){
        $dados = Request::all();
        $prof = $professor_id->input('professor_id');
       
        
        $data = now();

        if($data->month >6){
            $semestre = '2';
        }else{
            $semestre = '1';
        }       
          
        DB::table('ofertas')->insert([
            'titulo' => $dados->titulo,
            'area' => $dados->area,
            'ano' => $data->year,
            'semestre' => $semestre,
            'professor_id' => $prof,
            'created_at' => now(),
            'updated_at' => now()
            ]);
        
    }

}
