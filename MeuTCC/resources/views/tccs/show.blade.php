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

                        <form method="post"  action="" autocomplete="off" >
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Titulo</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Titulo">
                            </div>
  
                            <div class="form-group col-md-6">
                                <label >Descrição</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label >Menssagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            
    
                            <div class="form-group col-md-6">
                                <label >Menssagem</label>
                                <div class="input-group-prepend">
                                    
                                </div>
                                <div class="form-group">
                                  <input type="file" class="form-group"  aria-describedby="inputGroupFileAddon01">
                                  <label class="form-control" for="inputGroupFile01">Escolha o arquivo</label>
                                </div>
                              </div>
                            
                            <button type="button" class="btn btn-info">Adicionar Versão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
