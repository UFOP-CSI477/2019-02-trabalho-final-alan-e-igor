@extends('layouts.app', ['page' => __('Sobre'), 'pageSlug' => 'users'])

@section('titulo')
   - Sobre
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Sobre') }}</h5>
                </div>
                <div class="card-body">
                    <h4>Trabalho de Sitemas Web</h4>
                    <h4>Sistema de TCC</h4>
                    <h6>Aluno: Alan Queiroz Pinho</h6>
                    <h6>Matricula: 16.1.8336</h6>
                    <h6>Aluno: Igor Sant'Anna Siqueira José das Neves</h6>
                    <h6>Matricula: 16.1.8308</h6>
                    <h6>Turma: Sistemas de Informação</h6>
                </div>                
            </div>            
        </div>
    </div>        
@endsection