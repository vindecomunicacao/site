@extends('layout.controle')
@section('title','Célula')
@section('conteudo')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Célula <small>{{ isset($celula) ? 'Editar' : 'Cadastrar' }}</small></h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    @include('includes.controle.validator')
                    <!-- start form for validation -->
                    {!! Form::model(isset($celula)?$celula:null, ['route' => ['controle.celula.salvar', (isset($celula)?$celula->id:null)], 'class' => 'form-horizontal form-label-left']) !!}

                    <div class="form-group">
                        {!! Form::label('rede', 'Rede', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('rede_id', ['' => 'Selecione']+$redes, null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('lider', 'Líder', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('lider_id', ['' => 'Selecione']+$lideres, null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('nome', null, ['class' => 'form-control col-md-7 col-xs-12', 'required']) !!}
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {!! Form::submit(isset($celula) ? 'Editar' : 'Cadastrar', ['class' => 'btn btn-primary']) !!}
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

@section('scripts')
    <script type="application/javascript" src="/library/jquery.maskedinput.min.js"></script>
    <script>
        jQuery(function($){
            $("[name=cpf]").mask("999.999.999-99");
        });
    </script>
@endsection
