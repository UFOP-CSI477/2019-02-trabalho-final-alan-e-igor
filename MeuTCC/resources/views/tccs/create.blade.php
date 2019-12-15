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
                                <a href="{{ route('tcc') }}" class="btn btn-sm btn-primary">{{ __('Voltar para a lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post"  action="{{route('tccs.inscricao', $oferta)}}" autocomplete="off" >
                            @csrf
                    <input name="professor_id" value="{{$oferta->professor->id}}" hidden>
                            <h6 class="heading-small text-muted mb-4">{{ __('Informaçoes sobre o trabalho') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('titulo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="titulo">{{ __('Titulo: ')}} {{$oferta->titulo}} </label>
                                    @include('alerts.feedback', ['field' => 'titulo'])
                                </div>
                                <div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-area">{{ __('Area: ')}} {{$oferta->area}} </label>
                                    @include('alerts.feedback', ['field' => 'area'])
                                </div>
                                <div class="form-group{{ $errors->has('professor') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-area">{{ __('Professor: ') }}{{$oferta->professor->name}}</label>
                                    @include('alerts.feedback', ['field' => 'professor'])
                                </div>
                                <div class="form-group">
                                <label class="form-control-label">{{ __('Descrição: ') }}</label>
                                    <textarea class="form-control" rows="3" disabled>{{$oferta->descricao}}</textarea>
                                  </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4" onclick="demo.showNotification('top','left')">{{ __('Inscrever') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
