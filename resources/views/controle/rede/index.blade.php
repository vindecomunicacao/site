@extends('layout.controle')
@section('title','Rede')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Redes</h2>
                    <div class="pull-right">
                        <a href="{{ route('controle.rede.edit') }}" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Total de registros encontrados: {{ $redes->count() }}</p>
                    @if($redes->count())
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Nome</th>
                            <th class="column-title">Discipulador</th>
                            <th class="column-title">Supervisor</th>
                            <th class="column-title">Pastor</th>
                            <th class="column-title no-link last"><span class="nobr">Opções</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($redes as $rede)
                            <tr class="even pointer">
                                <td class=" ">{{ $rede->nome }}</td>
                                <td class=" ">{{ $rede->discipulador->nome }}</td>
                                <td class=" ">{{ $rede->supervisor->nome }}</td>
                                <td class=" ">{{ $rede->pastor->nome }}</td>
                                <td class=" last">
                                    @can('rede.alterar')
                                        <a href="{{ route('controle.rede.edit', $rede) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                    @endcan
                                    @can('rede.excluir')
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs excluir" data-url="{{ route('controle.rede.excluir', $rede) }}" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-times"></i></a>
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
