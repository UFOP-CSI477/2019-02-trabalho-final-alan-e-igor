@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h3 class="card-category">Bem vindo {{auth()->user()->name}}!</h3>
                            <h2 class="card-title">Por favor utilize os menu lateral para acessar nossas opçoes.</h2>
                        </div>                      
                    </div>
                </div>
            </div>
        </div> 
        @if(auth()->user()->tipo == 'Aluno') 
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-tasks">
                    <div class="card-header ">
                        <h6 class="title d-inline">Objetivos (5)</h6>                      
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Verificação Ortografica</p>
                                            <p class="text-muted">Reler e vericar a ortografia de todo trabalho.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Editar tarefa">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" >
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Enviar para o professor</p>
                                            <p class="text-muted">Enviar para o professor na data combinada.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Editar tarefa.">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Realizar as mudanças propostas</p>
                                            <p class="text-muted">Concertar todos os problemas citados pelo professor.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Preparar apresentação para a banca.</p>
                                            <p class="text-muted">Realizar apresentação para utilizar no dia da apresentação.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Apresentar na data marcada.</p>
                                            <p class="text-muted">O momento final é esse. Boa sorte!!!</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
        @else

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-tasks">
                    <div class="card-header ">
                        <h6 class="title d-inline">Objetivos (5)</h6>                      
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Ler o trabalho do aluno</p>
                                            <p class="text-muted">Ler e dar um feedback para o aluno.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Editar tarefa">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" >
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Receber o trabalho com as atualizações propostas</p>
                                            <p class="text-muted">Verificar se as atualizações propostas foram implementadas.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Editar tarefa.">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Marcar data para a apresentação</p>
                                            <p class="text-muted">Marcar e passar a data da apresentação para o aluno.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Repassar o trabalho para toda a banca</p>
                                            <p class="text-muted">Enviar o trabalho para toda banca ler com antecedencia.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Ver a apresentação</p>
                                            <p class="text-muted">Ajude o se necessario.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="title">Lançar a nota no sistema</p>
                                            <p class="text-muted">Momento final do trabalho de vocês.</p>
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                                <i class="tim-icons icon-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>              
        </div>

        @endif
                
    
        
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
