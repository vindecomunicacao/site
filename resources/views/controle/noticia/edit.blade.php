@extends('layout.controle')
@section('title','Notícia')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Notícia <small>{{ isset($noticia) ? 'Editar' : 'Cadastrar' }}</small></h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    @include('includes.controle.validator')
                    <!-- start form for validation -->
                    {!! Form::model(isset($noticia)?$noticia:null, ['route' => ['controle.noticia.salvar', (isset($noticia)?$noticia->id:null)], 'class' => 'form-horizontal form-label-left', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('nome', null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('texto', 'Texto', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('texto', null, ['class' => 'form-control ckeditor', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('imagem', 'Imagem', ['class' => ' sr-only control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::file('imagem', ['class' => 'file-single col-md-7 col-xs-12', isset($noticia)?'':'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('data', 'Data', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('data', null, ['class' => 'form-control col-md-7 col-xs-12 datepicker', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('publicar', 'Publicar', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::checkbox('ativo', 1, null,['class' => 'form-control col-md-7 col-xs-12']) !!}
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {!! Form::submit(isset($noticia) ? 'Editar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
                            {!! Form::button('Cancelar', ['class' => 'btn btn-default']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
                <!-- end form for validations -->
                </div>
            </div>
        </div>
    </div>
@endsection

