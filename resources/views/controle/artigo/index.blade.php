@extends('layout.controle')
@section('title','Artigo')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Artigos</h2>
                    <div class="pull-right">
                        <a href="{{ route('controle.artigo.edit') }}" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <p>Total de registros encontrados: {{ $artigos->count() }}</p>
                    @if($artigos->count())
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Imagem</th>
                            <th class="column-title">Nome</th>
                            <th class="column-title">Data</th>
                            <th class="column-title">Publicado</th>
                            <th class="column-title no-link last"><span class="nobr">Opções</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($artigos as $artigo)
                            <tr class="even pointer">
                                <td class=" "><img src="{{ route('image.render', ['artigo','p',$artigo->imagem]) }}" alt=""></td>
                                <td class=" ">{{ $artigo->nome }}</td>
                                <td class=" ">{{ $artigo->data }}</td>
                                <td class="">{{ ($artigo->ativo)?'Sim':'Não' }}</td>
                                <td class=" last">
                                    @can('artigo.alterar')
                                        <a href="{{ route('controle.artigo.edit', $artigo) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                    @endcan
                                    @can('artigo.excluir')
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs excluir" data-url="{{ route('controle.artigo.excluir', $artigo) }}" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-times"></i></a>
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
