@extends('layouts.app', ['class' => 'register-page', 'page' => __('Pagina de Registro'), 'contentClass' => 'register-page'])

@section('pageTitle', 'Registro')

@section('content')
<div class="container-fluid mt--7">
    <div class="row">  
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <form class="form" method="post" action="{{ route('professor.ofertaTcc.submit') }}">
                        @csrf

                        <div class="card-body">
                          
                            <div class="input-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tim-icons icon-email-85"></i>
                                    </div>
                                </div>
                                <input type="text" name="titulo" class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo') }}">
                                @include('alerts.feedback', ['field' => 'titulo'])
                            </div>
                            
                            <div class="input-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tim-icons icon-badge"></i>
                                    </div>
                                </div>
                                <input type="text" name="descricao" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" placeholder="{{ __('Descrição') }}">
                                @include('alerts.feedback', ['field' => 'descricao'])
                            </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-round btn-lg" onclick="demo.showNotification('top','left')">{{ __('Cadastrar Trabalho') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
