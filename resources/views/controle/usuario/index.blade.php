@extends('layout.controle')
@section('title','Usuário')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Usuários</h2>
                    <div class="pull-right">
                        <a href="{{ route('controle.usuario.edit') }}" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Total de registros encontrados: {{ $usuarios->count() }}</p>
                    @if($usuarios->count())
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Nome</th>
                            <th class="column-title">E-mail</th>
                            <th class="column-title no-link last"><span class="nobr">Opções</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr class="even pointer">
                                <td class=" ">{{ $usuario->nome }}</td>
                                <td class=" ">{{ $usuario->email }}</td>
                                <td class=" last">
                                    @can('usuario.alterar')
                                        <a href="{{ route('controle.usuario.edit', $usuario) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                    @endcan
                                    @can('usuario.excluir')
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs excluir" data-url="{{ route('controle.usuario.excluir', $usuario) }}" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-times"></i></a>
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
