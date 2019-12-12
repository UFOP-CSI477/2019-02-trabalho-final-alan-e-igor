@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">TCC</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                        <tr>
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Titulo') }}</th>
                            <th scope="col">{{ __('Area') }}</th>
                            <th scope="col">{{ __('Ano') }}</th>
                            <th scope="col">{{ __('Semestre') }}</th>
                            <th scope="col">{{ __('Professor') }}</th>
                            <th scope="col">{{ __('Aluno') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tcc as $x)
                            <tr>
                                <td>{{$x->id}}</td>
                                <td>{{$x->titulo}}</td>
                                <td>{{$x->titulo}}</td>
                                <td>{{$x->ano}}</td>
                                <td>{{$x->semestre}}</td>
                                <td>{{$x->professor_id}}</td>
                                <td>{{$x->aluno_id}}</td>                               
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection