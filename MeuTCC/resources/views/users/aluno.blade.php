@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">Alunos</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table tablesorter" id="">
                    <thead class=" text-primary">
                        <tr>
                            <th scope="col">{{ __('Nome') }}</th>
                            <th scope="col">{{ __('Area') }}</th>
                            <th scope="col">{{ __('Tipo') }}</th>
                            <th scope="col">{{ __('Email') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $x)
                            <tr>
                                <td>{{$x->name}}</td>
                                <td>{{$x->area}}</td>
                                <td>{{$x->tipo}}</td>
                                <td>{{$x->email}}</td>                              
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection