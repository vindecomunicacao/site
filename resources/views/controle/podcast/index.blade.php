@extends('layout.controle')
@section('title','Podcast')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Podcasts</h2>
                    <div class="pull-right">
                        <a href="{{ route('controle.podcast.edit') }}" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-2">
                            <form method="get" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-2 col-lg-2 control-label" for="tags">Pesquisar por </label>
                                    <div class="col-sm-7 col-md-8 col-lg-4">
                                        <input type="text" class="form-control" name="tags" id="tags" value="{{ request('tags') }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Procurar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if($podcasts->count())
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="podcasts">
                                    @foreach($podcasts as $podcast)
                                        <li>
                                            <div class="row" style="padding: 20px 0">
                                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
                                                    <img src="{{ route('image.render', ['podcast', 'p', $podcast->imagem]) }}" title="{{ $podcast->titulo }}" />
                                                </div>
                                                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                                    <h1>
                                                        <a style="text-decoration: none" download="{{ title_case(str_slug("{$podcast->titulo} {$podcast->subtitulo}", "_")) . " - Vinde Podcast." . pathinfo($podcast->arquivo, PATHINFO_EXTENSION) }}" href="{{ route('image.render', ['podcast', 'arquivos', $podcast->arquivo ]) }}"><i class="fa fa-download" aria-hidden="true"></i></a>
                                                        <a style="text-decoration: none" href="#" id="podcast_{{ $podcast->id }}_playBtn"  onclick="playPauseAudio('#podcast_{{ $podcast->id }}', true);"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
                                                        <a style="text-decoration: none; display: none" href="#" id="podcast_{{ $podcast->id }}_pauseBtn" onclick="playPauseAudio('#podcast_{{ $podcast->id }}', false);"><i class="fa fa-stop-circle" aria-hidden="true"></i></a>
                                                        <audio id="podcast_{{ $podcast->id }}" style="display: none" src="{{ route('image.render', ['podcast', 'arquivos', $podcast->arquivo ]) }}" controls></audio>
                                                        <a href="{{ route("controle.podcast.edit", [$podcast->id]) }}">
                                                            {{ $podcast->titulo }} <small>{{ $podcast->subtitulo }}</small>
                                                        </a>
                                                    </h1>
                                                    <p class="text-justify" style="margin-bottom: 20px"><strong>{{ str_limit($podcast->descricao, 150) }}</strong></p>
                                                    <p class="text-left">
                                                        <a href="{{ route("controle.podcast.index", ['autor_id' => $podcast->autor->id]) }}" style="margin-right: 5px;">
                                                            Publicado por {{ $podcast->autor->nome }} em {{ date_format(date_create_from_format('Y-m-d H:i:s', $podcast->created_at), 'd/m/Y H:i:s') }}
                                                        </a>
                                                        @foreach(explode(',', $podcast->tags) as $tag)
                                                            <a href="{{ route("controle.podcast.index", ['tags' => $tag]) }}">
                                                                <span class="label label-info" style="margin-right: 2px;">
                                                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                                                    {{ $tag }}
                                                                </span>
                                                            </a>
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                {!! $podcasts->links() !!}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                Nenhum resultado encontrado
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style rel="stylesheet" type="text/css">
        ul.podcasts {
            list-style: none;
            padding: 0;
        }
        ul.podcasts li:not(:last-child) {
            border-bottom: 1px solid lightgray;
        }
        ul.podcasts li img {
            margin-top: 10px;
            border-radius: 50px;
        }
        ul.podcasts li a {
            text-decoration: none;
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

        function playPauseAudio(element, play){
            if($(element).attr('src')){
                $(element + "_playBtn").toggle(!play);
                $(element + "_pauseBtn").toggle(play);
                if(play){
                    $(element).trigger('play').on('ended', function(){
                        playPauseAudio(element, false);
                    });
                }else{
                    $(element).trigger('pause')
                        .prop("currentTime", 0);
                }
            }
        }
    </script>
@endsection

