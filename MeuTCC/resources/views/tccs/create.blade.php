@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Adicionar um novo trabalho') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Voltar para a lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informaçoes sobre o trabalho') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="titulo">{{ __('Titulo') }}</label>
                                    <input type="text" name="titulo" id="titulo" class="form-control form-control-alternative" placeholder="{{ __('Titulo') }}"  required autofocus>
                                    @include('alerts.feedback', ['field' => 'titulo'])
                                </div>
                                <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-area">{{ __('Area') }}</label>
                                    <input type="text" name="area" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Area') }}"  required>
                                    @include('alerts.feedback', ['field' => 'area'])
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-ano">{{ __('Ano') }}</label>
                                    <input type="number" name="ano" id="input-ano" class="form-control form-control-alternative" placeholder="{{ __('Ano') }}" value="">
                                    @include('alerts.feedback', ['field' => 'ano'])
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-semestre">{{ __('Semestre') }}</label>
                                    <input type="number" name="semestre" id="input-semestre" class="form-control form-control-alternative" placeholder="{{ __('Semestre') }}" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-professor">{{ __('Professor') }}</label>
                                    <select class="form-control" name="professor" >
                                        @foreach ($prof as $x)
                                            <option value="{{isset($x->id) ? $x->id : ''}}" class="dropdown-menu dropdown-black" >{{isset($x->name) ? $x ->name : ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Inscrever') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
