@extends('layout.controle')
@section('title','Podcast')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Podcast
                        <small>{{ isset($podcast) ? 'Editar' : 'Cadastrar' }}</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    @include('includes.controle.validator')
                    {!! Form::model(isset($podcast) ? $podcast : null, ['route' => ['controle.podcast.salvar', (isset($podcast) ? $podcast->id : null)], 'class' => 'form-horizontal form-label-left', 'enctype' => "multipart/form-data"]) !!}
                        <div class="form-group" style="margin: 0">
                            {!! Form::label('arquivo', 'Podcast', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::file('arquivo', ['max-file-size' => 64000000, 'accept' => 'audio/MP3', 'class' => 'file-single col-md-7 col-xs-12', !isset($podcast) ? 'required' : '']) !!}
                                <p class="help-desk">Tamanho máximo do arquivo 64 MB</p>
                            </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                            {!! Form::label('imagem', 'Imagem', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::file('imagem', ['accept' => 'image/*', 'class' => 'file-single col-md-7 col-xs-12', !isset($podcast) ? 'required' : '']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('titulo', 'Titulo', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('titulo', null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('subtitulo', 'Sub-Titulo', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('subtitulo', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('link', 'Link', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('link', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('direitos_autorais', 'Direitos do Áudio', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('direitos_autorais', 'Vinde Células', ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('descricao', 'Descrição', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('descricao', null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tags">Tags</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('tags', null, ['id' => 'tags', 'class' => 'tags form-control col-md-7 col-xs-12', 'required']) !!}
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                {!! Form::submit(isset($podcast) ? 'Editar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
                                @if(isset($podcast)) <a class="btn btn-danger" href="{{ route('controle.podcast.excluir', [$podcast->id]) }}">Excluir</a> @endif
                                <a class="btn btn-default" href="{{ url(back()->getTargetUrl()) }}">Cancelar</a>
                            </div>
                        </div>

                        {!! Form::hidden('autor_id', auth()->user()->id) !!}
                    {!! Form::close() !!}
                    <div class="progress" style="display: none;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style rel="stylesheet" type="text/css">
        .bootstrap-filestyle {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('scripts')
    <script src="/library/tags/jquery.tagsinput.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $('#tags').tagsInput({
            width: 'auto',
            autocomplete: {
                autoFill: true
            },
            autocomplete_url: JSON.parse("{{ $tags->toJson() }}".replace(/&quot;/g, '"')) // jquery ui autocomplete requires a json endpoint
        });

        $("#arquivo").on('change', function(e){
            var audio = new Audio(e.target.files[0].fileName);
            audio.addEventListener("loadedmetadata", function(_event) {
                console.log(audio.duration);
            });
        });
    </script>
@endsection