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
                            <th scope="col">{{ __('Professor') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ofertas as $t)
                            <tr>
                                <td>{{$t->id}}</td>
                                <td>{{$t->titulo}}</td>
                                <td>{{$t->area}}</td>
                                <td>{{$t->professor->name}}</td>
                            </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection