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
                        </div>
                    </div>
                    <div class="card-body">

                    <form method="post"  action="{{route('tcc.schedule.atualizar')}}" autocomplete="off" >
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Titulo</label>
                                <input type="text" class="form-control" name="titulo" placeholder="Titulo">
                            </div>
  
                            <div class="form-group col-md-6">
                                <label >Descrição</label>
                                <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label >Menssagem</label>
                                <textarea class="form-control" name="mensagem" rows="3"></textarea>
                            </div>

                            <button type="submit"  class="btn btn-info">Adicionar Versão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
