@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Adicionar um novo trabalho') }}</h3>
                            </div>
                        </div>
                    </div>
                    @if(isset($link))
                        
                    <div class="card-body">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Descrição') }}</th>
                            <th scope="col">{{ __('Mensagem') }}</th>                           
                        </thead>
                        <tbody>
                            @foreach ($progresso as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>                                   
                                    <td>{{ $p->descricao }}</td>
                                    <td>{{ $p->mensagem }}</td>
                                </tr>
                            @endforeach                          
                        </tbody>
                        <tfoot>
                            <td><a href="{{$link->link}}">{{$link->link}}</a></td>
                        </tfoot>
                    </table>
                    </div>
                    @endif

                    <div class="card-body">
                    <form method="post"  action="{{route('tcc.schedule.atualizar')}}" autocomplete="off" >
                            @csrf
                            
                            <div class="form-group col-md-6">
                                <label >Descrição</label>
                                <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                            </div>
                            <div class="form-group">
                                <label >Menssagem</label>
                                <textarea class="form-control" name="mensagem" rows="3"></textarea>
                            </div>

                            <button type="submit"  class="btn btn-info" onclick="demo.showNotification('top','left')">Adicionar Versão</button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection
