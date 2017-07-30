@extends('layout.controle')
@section('title','Banner')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Banner <small>{{ isset($banner) ? 'Editar' : 'Cadastrar' }}</small></h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    @include('includes.controle.validator')
                    <!-- start form for validation -->
                    {!! Form::model(isset($banner)?$banner:null, ['route' => ['controle.banner.salvar', (isset($banner)?$banner->id:null)], 'class' => 'form-horizontal form-label-left', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('nome', null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('texto', 'Texto', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('texto', null, ['class' => 'form-control', 'rows' => '2']) !!}
                        </div>
                    </div>
                        <div class="form-group">
                            {!! Form::label('posicao', 'Lado Esquerdo', ['class' => 'control-label col-md-4 col-sm-4 col-xs-12']) !!}
                            <div class="col-sm-1">
                            </div>
                            {!! Form::label('posicao', 'Centro', ['class' => 'control-label col-md-1 col-sm-1 col-xs-12']) !!}
                            <div class="col-sm-2">
                            </div>
                            {!! Form::label('posicao', 'Lado Direito', ['class' => 'control-label col-md-1 col-sm-1 col-xs-12']) !!}
                            <div class="col-sm-2">
                                {{--{!! Form::radio('posicao', 5, null, ['class' => 'icheck', 'required']) !!}<br/>--}}
                                {{--<label>Lado Direito</label>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-1 col-sm-offset-3 text-center">
                                {!! Form::radio('posicao', 5, null, ['class' => 'icheck', 'required']) !!}<br/>
                            </div>
                            <div class="col-sm-1 col-sm-offset-1 text-center">
                                {!! Form::radio('posicao', 3, null, ['class' => 'icheck', 'required']) !!}<br/>

                            </div>
                            <div class="col-sm-1 col-sm-offset-2 text-center">
                                {!! Form::radio('posicao', 1, null, ['class' => 'icheck', 'required']) !!}<br/>

                            </div>
                        </div>
                        <div class="form-group">
                        {!! Form::label('imagem', 'Imagem', ['class' => ' sr-only control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::file('imagem', ['class' => 'file-single col-md-7 col-xs-12', isset($banner)?'':'required']) !!}
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {!! Form::submit(isset($banner) ? 'Editar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
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

