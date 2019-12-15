@extends('layouts.app', ['class' => 'register-page', 'page' => __('Pagina de Registro'), 'contentClass' => 'register-page'])

@section('pageTitle', 'Registro')

@section('content')
<div class="container-fluid mt--7">
    <div class="row">  
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <form class="" method="post" name="_method" action="{{ route("tcc.schedule.salvar") }}">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
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
                            
                            <div class="input-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tim-icons icon-link-72"></i>
                                    </div>
                                </div>
                                <input type="text" name="link" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" placeholder="{{ __('Deixe seu endereço de edição de texto. Ex.: Google Docs ou Overleaf.') }}">
                                @include('alerts.feedback', ['field' => 'link'])
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