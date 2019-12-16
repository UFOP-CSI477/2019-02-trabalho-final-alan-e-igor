<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Tcc;
use App\User;
use App\Oferta;
use App\Progresso;

class TccController extends Controller
{
    public function index(){
        $ofertas = Oferta::all();

        return view('tccs.ofertas_tcc', compact('ofertas'));
    }

    public function view(){
        $tcc = Tcc::all();
        return view('tccs.showCreated', compact('tcc'));
    }

    public function show()
    {
        $progresso = Progresso::all();

        $link = DB::select(
            DB::raw('SELECT * FROM tccs WHERE tccs.professor_id = '
            .auth()->user()->id.' or aluno_id = '.auth()->user()->id ));

        $link = $link[0];

        return view('tccs.show', compact('progresso', 'link'));
    }

    public function add()
    {
        return view('tccs.add');
    }

    public function salvar(Request $dados)
    {
        $dados = $dados->all();

        $tcc = DB::select(DB::raw('SELECT * FROM tccs WHERE tccs.aluno_id = '.auth()->user()->id));
        
        $id = $tcc[0]->id;

        $tcc['titulo'] = $dados['titulo'];
        $tcc['link'] = $dados['link'];

        Tcc::find($id)->update($tcc);
  
        sleep(1);
            
        return redirect()->route('home');
        
    }


    public function criar($id){
        
        $oferta = Oferta::find($id);

        return view('tccs.create', compact('oferta'));
    }

    public function inscricao(Request $professor_id, $id_oferta)
    {   
        
        if($tcc = DB::table('tccs')->where('tccs.aluno_id','=', auth()->user()->id)->count()> 0){
            sleep(1);
            
            return redirect()->route('tcc');
            
        }

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
                'created_at' => now(),
                'updated_at' => now()
                ]);
            
            $dados = Oferta::find($id_oferta);
            $dados->delete();
            sleep(1);
            return redirect()->route('tcc');
        }catch(QueryException $e){
            sleep(1);
            
           return redirect()->route('home');
        }
    }

    public function atualizar(Request $dados)
    {
        $usuario = User::all();        
        $tcc = DB::select(DB::raw('SELECT * FROM tccs WHERE tccs.aluno_id = '.auth()->user()->id));
        
         $var = $tcc[0]->id;

        DB::table('progressos')->insert([
            'descricao' => $dados->descricao,
            'mensagem' => $dados->mensagem,
            'tcc_id' => $var,
            'created_at' => now(),
            'updated_at' => now()
            ]);

            sleep(1);
            return redirect()->route('home');

    }


}
