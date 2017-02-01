@extends('layout.controle')
@section('title','Galeria')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Galeria <small>{{ isset($galeria) ? 'Editar' : 'Cadastrar' }}</small></h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div id="alertUpload" class="alert alert-success" style="display: none;text-align: center">Aguarde enquanto atualiza as informações</div>
                    <div class="clearfix"></div>
                    <!-- start form for validation -->
                    {!! Form::model(isset($galeria)?$galeria:null, ['route' => ['controle.galeria.upload', (isset($galeria)?$galeria:null)], 'class' => 'form-horizontal form-label-left', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome', ['class' => 'sr-only control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {!! Form::file('imagem[]', ['id' => 'fileinput', 'multiple']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
                <!-- end form for validations -->
                 <div class="clearfix"></div>
                    <p>Total de registros encontrados: {{ $galeria->imagens->count() }}</p>
                    @if(true)
                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Imagem</th>
                                <th class="text-center column-title">Legenda</th>
                                <th class="column-title">Capa</th>
                                <th class="column-title no-link last"><span class="nobr">Opções</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($galeria->imagens as $imagem)
                                <tr class="even pointer">
                                    <td class=" "><img src="{{ route('image.render', ['galeria', 'p', $imagem->nome]) }}" alt=""></td>
                                    <td class=" ">
                                        <div class="col-md-10">
                                            {{ Form::text('legenda', $imagem->legenda, ['class' => 'form-control', 'id' => $imagem->id]) }}
                                            <a class="btn btn-lg btnLegenda"  data-id="{{ $imagem->id }}" href="javascript:void(0);"><i class="fa fa-check fa-2x"></i></a>
                                        </div>
                                        <div class="pull-left col-md-2">
                                        </div>
                                    </td>
                                    <td class=" ">{!! Form::checkbox('capa', 1, null,['class' => 'form-control col-md-7 col-xs-12', 'data-id' => $imagem->id]) !!}</td>
                                    <td class=" last">
                                    @can('galeria.excluir')
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs excluir" data-url="{{ route('controle.galeria.excluir', $galeria) }}" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-times"></i></a>
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

@section('scripts')
    <script>
        if($('#fileinput').length) {
            var $input = $("#fileinput");
            $("#fileinput").fileinput({
                language: "pt-BR",
                uploadUrl: '{{ route('controle.galeria.upload', $galeria) }}',
                uploadAsync: true,
                uploadExtraData: {
                    galeria_id: {{ $galeria->id }},
                    _token: '{{ csrf_token() }}'
                },
                allowedFileExtensions: ["jpg", "png", "gif"],
            }).on('filebatchuploadcomplete', function() {
                $('#formUpload').hide('fast');
                $('#alertUpload').show('slow');
                window.setTimeout(function() {
                    window.location.reload();
                },2000);
            });

            $('input[name=capa]').on('switchChange.bootstrapSwitch', function () {
                var id = $(this).attr('data-id');
                var capa = $(this).val();

                if (id) {
                    $.ajax({
                        url: '{{ route('controle.galeria.destaque-imagem') }}',
                        type: 'POST',
                        data: {id: id, capa: capa, _token: '{{ csrf_token() }}'},
                    });
                }
            });

            $('.btnLegenda').on('click', function () {
                var id = $(this).attr('data-id');
                var legenda = $('#'+id).val();

                if (id) {
                    $.ajax({
                        url: '{{ route('controle.galeria.legenda-imagem') }}',
                        type: 'POST',
                        data: {id: id, legenda: legenda, _token: '{{ csrf_token() }}'},
                        dataType: 'json',
                        success: function(response) {
                            if(response.success) {
                                new PNotify({
                                    title: 'SUCESSO',
                                    text: 'Operação efetuada com sucesso',
                                    type: 'success'
                                });
                            } else {
                                new PNotify({
                                    title: 'ERRO',
                                    text: 'Operação não realizada',
                                    type: 'error'
                                });
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection