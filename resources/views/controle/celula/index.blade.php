@extends('layout.controle')
@section('title','Célula')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Células</h2>
                    <div class="pull-right">
                        <a href="{{ route('controle.celula.edit') }}" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Total de registros encontrados: {{ $celulas->count() }}</p>
                    @if($celulas->count())
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Nome</th>
                            <th class="column-title">Rede</th>
                            <th class="column-title">Lider</th>
                            <th class="column-title no-link last"><span class="nobr">Opções</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($celulas as $celula)
                            <tr class="even pointer">
                                <td class=" ">{{ $celula->nome }}</td>
                                <td class=" ">{{ $celula->rede->nome }}</td>
                                <td class=" ">{{ $celula->lider->nome }}</td>
                                <td class=" last">
                                    @can('celula.alterar')
                                        <a href="{{ route('controle.celula.edit', $celula) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                    @endcan
                                    @can('celula.excluir')
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs excluir" data-url="{{ route('controle.celula.excluir', $celula) }}" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-times"></i></a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
