<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" value="{{ old("viewport") }}" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Vinde') }}</title>

    <!-- Styles -->
    <link href="/css/controle/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <style type="text/css" rel="stylesheet">
        .form-horizontal.group-border-dashed .form-group {
            margin: 0;
            padding: 20px 0;
            border-bottom: 1px dashed #efefef;
        }

        .form-horizontal.group-border-dashed .form-group:last-child {
            border-bottom: 0;
        }

        .form-horizontal .form-group label {
            font-weight: normal;
        }

        fieldset {
            margin-bottom: 20px;
        }

        .jumbotron img {
            margin: auto;
            width: 220px;
            padding-top: 0;
        }

        span.obrigatorio{
            font-weight: bold;
            color: red;
        }

        @media (max-width: 767px) {
            .form-horizontal.group-border-dashed .form-group label {
                margin-top: 15px;
            }

            .jumbotron img {
                width: 50%;
                display: block;
                margin: auto;
            }
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/cadastro') }}">
                    {{ config('app.name', 'Vinde') }}
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(isset($user))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <img src="/logos/NOVA-LOGO-VINDE.png"/>
                                    </div>
                                    <div class="col-md-9 col-sm-6">
                                        <h2>
                                            Parabéns, {{ $user->nome }}!
                                        </h2>
                                        <p>
                                            Muito obrigado por ter se cadastrado, Deus seja com você por onde fores!
                                            Amém.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary btn-large" href="{{ url('/cadastro') }}">Novo
                                                Cadastro</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <img src="/logos/NOVA-LOGO-VINDE.png"/>
                                    </div>
                                    <div class="col-md-9 col-sm-6">
                                        <h2>
                                            Cadastro de Membros da Vinde
                                        </h2>
                                        <p>
                                            Manter o cadastro dos membros da sua Célula sempre atualizado e bem
                                            organizado é parte fundamental para o ministério de um líder eficaz.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($errors->first())
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-warning alert-white rounded">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                                    </button>
                                    <div class="icon"><i class="fa fa-times-circle"></i></div>
                                    <strong>Alerta!</strong>
                                    <ul>
                                        @foreach($errors->all() as $chave => $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" class="form-horizontal group-border-dashed" method="POST"
                                  action="{{ url('/cadastro/salvar') }}">
                                {{ csrf_field() }}
                                <fieldset>
                                    <legend>Dados de Reconhecimento</legend>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="grupo_usuario_idID">Grupo de
                                            Usuário <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-4">
                                            <select name="grupo_usuario_id" class="form-control" id="grupo_usuario_idID"
                                                    required>
                                                <option value>Selecione</option>
                                                @foreach($grupos as $id => $grupo)
                                                    <option {{ !in_array($id, [2, 3]) ? 'disabled' : '' }} {{ old("grupo_usuario_id") == $id ? 'selected' : '' }} value="{{ $id }}">{{ $grupo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Dados Pessoais</legend>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="nomeID">Nome Completo <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nome" value="{{ old("nome") }}"
                                                   class="form-control" id="nomeID" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="dataNascimentoID">Data de
                                            Nascimento <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" name="dataNascimento" value="{{ old("dataNascimento") }}"
                                                   class="form-control"
                                                   id="dataNascimentoID" required/>
                                            <div class="help-block">Digite somente números</div>
                                        </div>

                                        <label class="control-label col-sm-2" for="celularID">Celular <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" name="celular" value="{{ old("celular") }}"
                                                   class="form-control" id="celularID"
                                                   required/>
                                            <div class="help-block">Digite somente números</div>
                                        </div>

                                        <label class="control-label col-sm-2" for="celularWhatsappID">Whatsapp</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="celularWhatsapp"
                                                   value="{{ old("celularWhatsapp") }}" class="form-control"
                                                   id="celularWhatsappID"/>
                                            <div class="help-block">Digite somente números</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="estadoCivilID">Estado Civil <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-3">
                                            <select name="estadoCivil" class="form-control" id="estadoCivilID" required>
                                                <option value>Selecione</option>
                                                <option {{ old("estadoCivil") == "1" ? 'selected' : '' }} value="1">
                                                    Solteiro (a)
                                                </option>
                                                <option {{ old("estadoCivil") == "2" ? 'selected' : '' }} value="2">
                                                    Casado (a)
                                                </option>
                                                <option {{ old("estadoCivil") == "3" ? 'selected' : '' }} value="3">
                                                    Divorciado (a)
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-sm-2 col-sm-offset-1">
                                            <div class="checkbox">
                                                <label for="filhosID">
                                                    <input type="checkbox" value="1" name="filhos"
                                                           {{ old("filhos") == "1" ? 'checked' : '' }} id="filhosID"/>
                                                    Tem Filhos?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="numeroFilhosID">Número de
                                            Filhos? </label>
                                        <div class="col-sm-2">
                                            <input type="number" name="numeroFilhos" value="{{ old("numeroFilhos") }}"
                                                   class="form-control"
                                                   id="numeroFilhosID" min="0" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="cepEnderecoID">CEP <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" name="cepEndereco" value="{{ old("cepEndereco") }}"
                                                   class="form-control"
                                                   id="cepEnderecoID" required/>
                                            <div class="help-block">Digite somente números</div>
                                        </div>

                                        <label class="control-label col-sm-2" for="enderecoID">Endereço <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static"></p>
                                            <input type="hidden" name="endereco" value="{{ old("endereco") }}"
                                                   class="form-control" id="enderecoID"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="numeroEnderecoID">Número <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" name="numeroEndereco" value="{{ old("numeroEndereco") }}"
                                                   class="form-control"
                                                   id="numeroEnderecoID" required/>
                                        </div>

                                        <label class="control-label col-sm-1" for="bairroEnderecoID">Bairro <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <p class="form-control-static"></p>
                                            <input type="hidden" name="bairroEndereco"
                                                   value="{{ old("bairroEndereco") }}" class="form-control"
                                                   id="bairroEnderecoID" required/>
                                        </div>

                                        <label class="control-label col-sm-1" for="cidadeEnderecoID">Cidade <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <p class="form-control-static"></p>
                                            <input type="hidden" name="cidadeEndereco"
                                                   value="{{ old("cidadeEndereco") }}" class="form-control"
                                                   id="cidadeEnderecoID" required/>
                                        </div>

                                        <label class="control-label col-sm-1" for="ufEnderecoID">UF <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <p class="form-control-static"></p>
                                            <input type="hidden" name="ufEndereco" value="{{ old("ufEndereco") }}"
                                                   class="form-control"
                                                   id="ufEnderecoID" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="checkbox">
                                                <label for="desempregadoID">
                                                    <input type="checkbox" value="1" name="desempregado"
                                                           {{ old("desempregado") == "1" ? 'checked' : '' }} id="desempregadoID"/>
                                                    Sem Profissão?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="profissaoID">Profissão</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="profissao" value="{{ old("profissao") }}"
                                                   class="form-control"
                                                   id="profissaoID"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="escolaridadeID">Escolaridade <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-3">
                                            <select name="escolaridade" class="form-control" id="escolaridadeID"
                                                    required>
                                                <option value>Selecione</option>
                                                <option {{ old("escolaridade") == "1" ? 'selected' : '' }} value="1">
                                                    ENSINO FUNDAMENTAL
                                                </option>
                                                <option {{ old("escolaridade") == "2" ? 'selected' : '' }} value="2">
                                                    ENSINO MÉDIO
                                                </option>
                                                <option {{ old("escolaridade") == "3" ? 'selected' : '' }} value="3">
                                                    ENSINO PROFISSIONALIZANTE
                                                </option>
                                                <option {{ old("escolaridade") == "4" ? 'selected' : '' }} value="4">
                                                    ENSINO SUPERIOR INCOMPLETO
                                                </option>
                                                <option {{ old("escolaridade") == "5" ? 'selected' : '' }} value="5">
                                                    ENSINO SUPERIOR COMPLETO
                                                </option>
                                                <option {{ old("escolaridade") == "6" ? 'selected' : '' }} value="6">
                                                    ESPECIALIZAÇÃO
                                                </option>
                                                <option {{ old("escolaridade") == "7" ? 'selected' : '' }} value="7">PÓS
                                                    GRADUAÇÃO
                                                </option>
                                                <option {{ old("escolaridade") == "8" ? 'selected' : '' }} value="8">
                                                    MESTRADO
                                                </option>
                                                <option {{ old("escolaridade") == "9" ? 'selected' : '' }} value="9">
                                                    DOUTORADO
                                                </option>
                                            </select>
                                        </div>

                                        <label class="control-label col-sm-1" for="cursoEscolaridadeID">Curso</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="cursoEscolaridade"
                                                   value="{{ old("cursoEscolaridade") }}" class="form-control"
                                                   id="cursoEscolaridadeID" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="atendimentoEspecialID">
                                                    <input type="checkbox" value="1" name="atendimentoEspecial"
                                                           {{ old("atendimentoEspecial") == "1" ? 'checked' : '' }} id="atendimentoEspecialID"/>
                                                    Possui algum problema de saúde que necessite de uma atenção
                                                    especial?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-3" for="descrisaoAtendimentoEspecialID">Descreva
                                            em poucas palavras</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="descrisaoAtendimentoEspecial"
                                                   value="{{ old("descrisaoAtendimentoEspecial") }}"
                                                   class="form-control"
                                                   id="descrisaoAtendimentoEspecialID" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="remedioControladoID">
                                                    <input type="checkbox" value="1" name="remedioControlado"
                                                           {{ old("remedioControlado") == "1" ? 'checked' : '' }} id="remedioControladoID"/>
                                                    Toma algum remédio controlado?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2 col-sm-offset-1"
                                               for="descrisaoRemedioControladoID">Qual o
                                            medicamento?</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="descrisaoRemedioControlado"
                                                   value="{{ old("descrisaoRemedioControlado") }}"
                                                   class="form-control"
                                                   id="descrisaoRemedioControladoID" disabled/>
                                            <div class="help-block">Use virgula ( , ) para separar</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label for="doadorSangueID">
                                                    <input type="checkbox" value="1" name="doadorSangue"
                                                           {{ old("doadorSangue") == "1" ? 'checked' : '' }} id="doadorSangueID"/>
                                                    Doador de Sangue?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2 col-sm-offset-2" for="tipoSanguineoID">Tipo
                                            Sanguineo</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="tipoSanguineo" value="{{ old("tipoSanguineo") }}"
                                                   class="form-control"
                                                   id="tipoSanguineoID" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4 text-left" for="necessidadeBasicaID">Hoje,
                                            qual a sua principal
                                            necessidade básica de sobrevivência?</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="necessidadeBasica"
                                                   value="{{ old("necessidadeBasica") }}" class="form-control"
                                                   id="necessidadeBasicaID"/>
                                            <div class="help-block">Ex: alimento, vestimenta, saúde, emprego, saúde
                                                emocional, familiar...
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Dados Eclesiásticos</legend>
                                    {{--<div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="celulaID">
                                                    <input type="checkbox" value="1" name="celula" value="{{ old("celula") }}" id="celulaID" />
                                                    Está em Célula?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2 col-sm-offset-1" for="celulaIDID">Qual a sua Célula?</label>
                                        <div class="col-sm-6">
                                            <select name="celulaID" value="{{ old("celulaID") }}" class="form-control" id="celulaIDID" disabled>
                                                <option value>Selecione</option>
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="dizimistaID">
                                                    <input type="checkbox" value="1" name="dizimista"
                                                           {{ old("dizimista") == "1" ? 'checked' : '' }} id="dizimistaID"/>
                                                    És Dizimista?
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 col-sm-offset-2">
                                            <div class="checkbox">
                                                <label for="batismoID">
                                                    <input type="checkbox" value="1" name="batismo"
                                                           {{ old("batismo") == "1" ? 'checked' : '' }} id="batismoID"/>
                                                    És Batizado?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="dataBatismoID">Data do
                                            Batismo</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="dataBatismo" value="{{ old("dataBatismo") }}"
                                                   class="form-control"
                                                   id="dataBatismoID" disabled/>
                                            <div class="help-block">Digite somente números</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="filantropicoID">
                                                    <input type="checkbox" value="1" name="filantropico"
                                                           {{ old("filantropico") == "1" ? 'checked' : '' }} id="filantropicoID"/>
                                                    Participa de algum grupo de Filantropia?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-3" for="grupoFilantropicoID">Qual grupo
                                            Filantrópico?</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="grupoFilantropico"
                                                   value="{{ old("grupoFilantropico") }}" class="form-control"
                                                   id="grupoFilantropicoID" disabled/>
                                            <div class="help-block">Use virgula ( , ) para separar</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label for="encontroComDeusID">
                                                    <input type="checkbox" value="1" name="encontroComDeus"
                                                           {{ old("encontroComDeus") == "1" ? 'checked' : '' }} id="encontroComDeusID"/>
                                                    Já participou do Encontro com Deus?
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="checkbox">
                                                <label for="conheceMinisteriosPauloID">
                                                    <input type="checkbox" value="1" name="conheceMinisteriosPaulo"
                                                           {{ old("conheceMinisteriosPaulo") == "1" ? 'checked' : '' }} id="conheceMinisteriosPauloID"/>
                                                    Você conhece os Cinco ministérios descritos por Paulo em EF 4.11?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="papelCorpoCristoID">Qual seu papel no
                                            corpo de cristo?</label>
                                        <div class="col-sm-2">
                                            <select name="papelCorpoCristo" class="form-control" id="papelCorpoCristoID"
                                                    disabled>
                                                <option value>Selecione</option>
                                                <option {{ old("papelCorpoCristo") == "1" ? 'selected' : '' }} value="1">
                                                    Profeta
                                                </option>
                                                <option {{ old("papelCorpoCristo") == "2" ? 'selected' : '' }} value="2">
                                                    Mestre
                                                </option>
                                                <option {{ old("papelCorpoCristo") == "3" ? 'selected' : '' }} value="3">
                                                    Apóstolo
                                                </option>
                                                <option {{ old("papelCorpoCristo") == "4" ? 'selected' : '' }} value="4">
                                                    Evangelista
                                                </option>
                                                <option {{ old("papelCorpoCristo") == "5" ? 'selected' : '' }} value="5">
                                                    Pastor
                                                </option>
                                                <option {{ old("papelCorpoCristo") == "6" ? 'selected' : '' }} value="6">
                                                    Não Sei
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="saiuOutraIgrejaID">
                                                    <input type="checkbox" value="1" name="saiuOutraIgreja"
                                                           {{ old("saiuOutraIgreja") == "1" ? 'checked' : '' }} id="saiuOutraIgrejaID"/>
                                                    Já foi membro de outra igreja que não seja a IEQ - Catedral da
                                                    Família?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="descrisaoSaiuOutraIgrejaID">
                                            Qual o motivo de sua saída?
                                        </label>
                                        <div class="col-sm-6">
                                            <textarea name="descrisaoSaiuOutraIgreja"
                                                      {{ old("descrisaoSaiuOutraIgreja") == "1" ? 'checked' : '' }} class="form-control"
                                                      id="descrisaoSaiuOutraIgrejaID" disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="escolaDiscipulosID">Participa da
                                            Escola de Discipulos? <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <select name="escolaDiscipulos" class="form-control" id="escolaDiscipulosID"
                                                    required>
                                                <option value>Selecione</option>
                                                <option {{ old("escolaDiscipulos") == "1" ? 'selected' : '' }} value="1">
                                                    Sim, estou cursando
                                                </option>
                                                <option {{ old("escolaDiscipulos") == "2" ? 'selected' : '' }} value="2">
                                                    Não curso
                                                </option>
                                                <option {{ old("escolaDiscipulos") == "3" ? 'selected' : '' }} value="3">
                                                    Já sou formado
                                                </option>
                                            </select>
                                        </div>

                                        <label class="control-label col-sm-3" for="descrisaoEscolaDiscipulosID">
                                            Deseja fazer algum comentário em relação a Escola de Discipulos?
                                        </label>
                                        <div class="col-sm-5">
                                            <textarea name="descrisaoEscolaDiscipulos" class="form-control"
                                                      id="descrisaoEscolaDiscipulosID">{{ old("descrisaoEscolaDiscipulos") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="cristaoComPoliticaID">
                                                    <input type="checkbox" value="1" name="cristaoComPolitica"
                                                           {{ old("cristaoComPolitica") == "1" ? 'checked' : '' }} id="cristaoComPoliticaID"/>
                                                    Você acha que cristão deve se envolver com política?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="descrisaoCristaoComPoliticaID">
                                            Por quais Motivos?
                                        </label>
                                        <div class="col-sm-6">
                                            <textarea name="descrisaoCristaoComPolitica" class="form-control"
                                                      id="descrisaoCristaoComPoliticaID">{{ old("descrisaoCristaoComPolitica") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="vontadeServirEmDepartamentoID">
                                                    <input type="checkbox" value="1" name="vontadeServirEmDepartamento"
                                                           {{ old("vontadeServirEmDepartamento") == "1" ? 'checked' : '' }} id="vontadeServirEmDepartamentoID"/>
                                                    Tem vontade de servir na igreja local em algum departamento?
                                                </label>
                                            </div>
                                        </div>

                                        <label class="control-label col-sm-2" for="departamento_idID">
                                            Qual departamento?
                                        </label>
                                        <div class="col-sm-6">
                                            <select name="departamento_id" class="form-control" id="departamento_idID">
                                                <option value>Selecione</option>
                                                @foreach($departamentos as $id => $departamento)
                                                    <option {{ old("departamento_id") == $id ? 'selected' : '' }} value="{{ $id }}">{{ $departamento }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="formacaoProfissionalParteChamadoID">
                                                    <input type="checkbox" value="1"
                                                           name="formacaoProfissionalParteChamado"
                                                           {{ old("formacaoProfissionalParteChamado") == "1" ? 'checked' : '' }} id="formacaoProfissionalParteChamadoID"/>
                                                    Tens consciência de que sua área de formação profissional é parte do
                                                    chamado de Deus?
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="formacaoAcademicaAliadoChamadoID">
                                                    <input type="checkbox" value="1"
                                                           name="formacaoAcademicaAliadoChamado"
                                                           {{ old("formacaoAcademicaAliadoChamado") == "1" ? 'checked' : '' }} id="formacaoAcademicaAliadoChamadoID"/>
                                                    Tens interesse em utilizar sua formação acadêmica como um dom no
                                                    reino de Deus?
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label for="estouDispostoServirComMeuTalentoID">
                                                    <input type="checkbox" value="1"
                                                           name="estouDispostoServirComMeuTalento"
                                                           {{ old("estouDispostoServirComMeuTalento") == "1" ? 'checked' : '' }} id="estouDispostoServirComMeuTalentoID"/>
                                                    Está disposto a servir a Deus com seus Dons e Talentos?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left" for="papelIgrejaSociedadeID">Qual
                                            o principal papel da igreja
                                            na sociedade?</label>
                                        <div class="col-sm-10">
                                            <textarea name="papelIgrejaSociedade" class="form-control"
                                                      id="papelIgrejaSociedadeID">{{ old("papelIgrejaSociedade") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left" for="propositoDeVidaNaTerraID">Qual
                                            seu propósito de vida
                                            nesta Terra?</label>
                                        <div class="col-sm-10">
                                            <textarea name="propositoDeVidaNaTerra" class="form-control"
                                                      id="propositoDeVidaNaTerraID">{{ old("propositoDeVidaNaTerra") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left" for="propositoMinisterialID">Qual
                                            seu propósito
                                            Ministerial?</label>
                                        <div class="col-sm-10">
                                            <textarea name="propositoMinisterial" class="form-control"
                                                      id="propositoMinisterialID">{{ old("propositoMinisterial") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left"
                                               for="motivacaoParaFazerOQueJaFazID">O que o motiva a fazer o
                                            que você faz?</label>
                                        <div class="col-sm-10">
                                            <textarea name="motivacaoParaFazerOQueJaFaz" class="form-control"
                                                      id="motivacaoParaFazerOQueJaFazID">{{ old("motivacaoParaFazerOQueJaFaz") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left"
                                               for="atividadesPreferidasParaTempoLivreID">O que você mais
                                            gosta de fazer quando tem tempo livre?</label>
                                        <div class="col-sm-10">
                                            <textarea name="atividadesPreferidasParaTempoLivre" class="form-control"
                                                      id="atividadesPreferidasParaTempoLivreID">{{ old("atividadesPreferidasParaTempoLivre") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2 text-left" for="jesusParaVoceID">Descreva
                                            em poucas palavras quem é Jesus
                                            para você</label>
                                        <div class="col-sm-10">
                                            <textarea name="jesusParaVoce" class="form-control"
                                                      id="jesusParaVoceID">{{ old("jesusParaVoce") }}</textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Dados de Login</legend>
                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="emailID">Email <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" value="{{ old("email") }}"
                                                   class="form-control" id="emailID" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="passwordID">Senha <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="password" name="password" class="form-control" id="passwordID"
                                                   minlength="8" required/>
                                        </div>

                                        <label class="control-label col-sm-2" for="passwordConfirmeID">Confirme sua
                                            senha <span class="obrigatorio">*</span></label>
                                        <div class="col-sm-2">
                                            <input type="password" name="confirme" class="form-control"
                                                   id="passwordConfirmeID"
                                                   title="Digite a mesma senha" required/>
                                        </div>
                                    </div>
                                </fieldset>

                                <button type="submit" class="btn btn-success">
                                    Cadastrar
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <br/>
    </div>
</div>

<!-- Scripts -->
<script type="application/javascript" src="/library/jquery.min.js"></script>
<script type="application/javascript" src="/library/bootstrap.min.js"></script>
<script type="application/javascript" src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
<script type="application/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (document_ready) {
        $.each([
            {id: '#celularID', pattern: '(00) 00000-0000'},
            {id: '#celularWhatsappID', pattern: '(00) 00000-0000'},
            {id: '#dataNascimentoID', pattern: '00/00/0000'},
            {id: '#dataBatismoID', pattern: '00/00/0000'},
            {id: '#cepEnderecoID', pattern: '00000-000'}
        ], function (i, mask) {
            $(mask.id).on('focus', function () {
                        $(mask.id).unmask();
                    })
                    .on('blur', function () {
                        $(mask.id).mask(mask.pattern, {clearIfNotMatch: true, selectOnFocus: true});
                    }).blur();
        });

        $("#filhosID").on("change", function (filhosID_change) {
            $('#numeroFilhosID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#desempregadoID").on("change", function (filhosID_change) {
            $('#profissaoID').attr('disabled', $(this).is(":checked"));
        }).change();

        $("#escolaridadeID").on("change", function (filhosID_change) {
            var isDisabled = ['3', '4', '5', '6', '7', '8', '9'].indexOf($(this).val()) == -1;
            $('#cursoEscolaridadeID').attr('disabled', isDisabled);
        }).change();

        $("#doadorSangueID").on("change", function (filhosID_change) {
            $('#tipoSanguineoID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#atendimentoEspecialID").on("change", function (filhosID_change) {
            $('#descrisaoAtendimentoEspecialID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#remedioControladoID").on("change", function (filhosID_change) {
            $('#descrisaoRemedioControladoID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        /*
        $("#celulaID").on("change", function (filhosID_change) {
            $('#celulaIDID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();
        */

        $("#batismoID").on("change", function (filhosID_change) {
            $('#dataBatismoID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#filantropicoID").on("change", function (filhosID_change) {
            $('#grupoFilantropicoID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#saiuOutraIgrejaID").on("change", function (filhosID_change) {
            $('#descrisaoSaiuOutraIgrejaID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#conheceMinisteriosPauloID").on("change", function (filhosID_change) {
            $('#papelCorpoCristoID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#vontadeServirEmDepartamentoID").on("change", function (filhosID_change) {
            $('#departamento_idID').attr('disabled', $(this).is(":not(:checked)"));
        }).change();

        $("#passwordID").on("blur", function (filhosID_change) {
            $('#passwordConfirmeID').attr('pattern', $(this).val());
        });

        $("#cepEnderecoID").on("blur", function (cepEnderecoID_blur) {
            if (typeof changeHiddenType != 'function')
                function changeHiddenType(type) {
                    $("#enderecoID").attr("type", type).val(null).prev("p").html(null).toggle(type == 'hidden');
                    $("#bairroEnderecoID").attr("type", type).val(null).prev("p").html(null).toggle(type == 'hidden');
                    $("#cidadeEnderecoID").attr("type", type).val(null).prev("p").html(null).toggle(type == 'hidden');
                    $("#ufEnderecoID").attr("type", type).val(null).prev("p").html(null).toggle(type == 'hidden');
                }

            changeHiddenType("hidden");
            var cep = $(this).val().replace(/[^\d]/g, "");
            if (!$.isEmptyObject(cep)) {
                $.ajax({
                    dataType: "json",
                    url: "http://republicavirtual.com.br/web_cep.php?cep=".concat(cep).concat("&formato=json")
                }).done(function (result) {
                            if (result.resultado == "1") {
                                var endereco = result.tipo_logradouro.concat(" ").concat(result.logradouro).trim();
                                $("#enderecoID").val(endereco).prev("p").html(endereco);
                                var bairro = result.bairro;
                                $("#bairroEnderecoID").val(bairro).prev("p").html(bairro);
                                var cidade = result.cidade;
                                $("#cidadeEnderecoID").val(cidade).prev("p").html(cidade);
                                var uf = result.uf;
                                $("#ufEnderecoID").val(uf).prev("p").html(uf);
                            } else {
                                $.notify("CEP não encontrado", "warn");
                                changeHiddenType("text");
                            }
                        })
                        .fail(function (error) {
                            $.notify("Erro ao buscar o CEP", "error");
                            changeHiddenType("text");
                        });
            }
        }).blur();
    });
</script>
</body>
</html>
