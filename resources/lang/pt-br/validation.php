<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute deve ser aceito.',
    'active_url'           => ':attribute não é uma URL válida.',
    'after'                => ':attribute deve ser uma data depois de :date.',
    'alpha'                => ':attribute deve conter somente letras.',
    'alpha_dash'           => ':attribute deve conter letras, números e traços.',
    'alpha_num'            => ':attribute deve conter somente letras e números.',
    'array'                => ':attribute deve ser um array.',
    'before'               => ':attribute deve ser uma data antes de :date.',
    'between'              => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file'    => ':attribute deve estar entre :min e :max kilobytes.',
        'string'  => ':attribute deve estar entre :min e :max caracteres.',
        'array'   => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => ':attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não confere.',
    'date'                 => ':attribute não é uma data válida.',
    'date_format'          => ':attribute não confere com o formato :format.',
    'different'            => ':attribute e :other devem ser diferentes.',
    'digits'               => ':attribute deve ter :digits dígitos.',
    'digits_between'       => ':attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => ':attribute não tem dimensões válidas.',
    'distinct'             => ':attribute campo contém um valor duplicado.',
    'email'                => ':attribute deve ser um endereço de e-mail válido.',
    'exists'               => ':attribute selecionado é inválido.',
    'file'                 => ':attribute precisa ser um arquivo.',
    'filled'               => ':attribute é um campo obrigatório.',
    'image'                => ':attribute deve ser uma imagem.',
    'in'                   => ':attribute é inválido.',
    'in_array'             => ':attribute campo não existe em :other.',
    'integer'              => ':attribute deve ser um inteiro.',
    'ip'                   => ':attribute deve ser um endereço IP válido.',
    'json'                 => ':attribute deve ser um JSON válido.',
    'max'                  => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file'    => ':attribute não deve ter mais que :max kilobytes.',
        'string'  => ':attribute não deve ter mais que :max caracteres.',
        'array'   => ':attribute não pode ter mais que :max itens.',
    ],
    'mimes'                => ':attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => ':attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve ser no mínimo :min.',
        'file'    => ':attribute deve ter no mínimo :min kilobytes.',
        'string'  => ':attribute deve ter no mínimo :min caracteres.',
        'array'   => ':attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => ':attribute deve ser um número.',
    'present'              => 'O :attribute deve estar presente.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O :attribute é necessário a menos que :other esteja em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same'                 => ':attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => ':attribute deve ser :size.',
        'file'    => ':attribute deve ter :size kilobytes.',
        'string'  => ':attribute deve ter :size caracteres.',
        'array'   => ':attribute deve conter :size itens.',
    ],
    'string'               => ':attribute deve ser uma string',
    'timezone'             => ':attribute deve ser uma timezone válida.',
    'unique'               => ':attribute já está em uso.',
    'uploaded'             => ':attribute falhou no upload.',
    'url'                  => 'O formato de :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'regmecescola' => "Código do MEC",
        'nr_cnpj' => "CNPJ",
        'cd_dependenciaadministrativa' => "Dependência ADM",
        'nm_unidade' => "Nome da Unidade",
        'st_situacao' => "Situação da Unidade",
        'cd_tipounidade' => "Tipo da Instituição",
        'cd_escola' => "Escola Sede",
        'dt_fundescola' => "Data de Fundação",
        'atofundescola' => "Ato de Fundação",
        'fl_regulamentacaoconselho' => "Regulamentação Conselho",
        'cd_localfuncionamento' => "Local Funcionamento",
        'tp_ocupacaopredio' => "Tipo de Prédio",
        'cd_tipograde' => "Tipo Grade",
        'fl_escolati' => "Escola de tempo integral",
        'cd_tipopredio' => "Tipo de Contrato",
        'fl_escolaalternancia' => "Escola com proposta pedagógica de formação por alternância",
        'dt_anoletivoini' => "Data início do ano letivo",
        'dt_anoletivofim' => "Data fim do ano letivo (previsão)",
        'cd_cepunidade' => "CEP",
        'nm_endescola' => "Endereço",
        'nr_endereco' => "Número",
        'nm_perimetro' => "Perimetro",
        'complendunidade' => "Complemento",
        'nm_bairro' => "Bairro",
        'tp_zona' => "Zona",
        'sg_distrito' => "Distrito",
        'nr_telunidade' => "Telefone Escolar",
        'nr_telefonepublico' => "Telefone Público",
        'nr_fax' => "Fax",
        'nm_email' => "Endereço Eletrônico (e-mail)",
        'cd_abastecimento' => "Abastecimento de Água",
        'sn_aguafiltrada' => "Água consumida pelos alunos é filtrada",
        'cd_abastecimentoenergia' => "Abastecimento energia elétrica",
        'cd_esgoto' => "Esgoto sanitário",
        'qt_salasnaescola' => "Total de Salas na Escola",
        'qt_salasutilizadasparaaula' => "Total de Salas utilizadas para aula",
        'qt_funcionariosescola' => "Total de Funcionários na Escola",
        'sn_oferecealimentacao' => "Oferece Alimentação",
        'sn_atendimentoee' => "Atendimento Educacional Especializado (AEE)",
        'sn_atividadecomplementar' => "Atividade Complementar",
        'sn_turmapba' => "Escola cede espaço para turmas do Programa Brasil Alfabetizado",
        'sn_abrefds' => "Escola abre aos finais de semana para a comunidade",
        'cd_projeto' => "Projetos",
        'cd_materialdidatico' => "Material Didático",
        'cd_destinacaolixo' => "Destinação do Lixo",
        'cd_tipodependencia' => "Depêndencia",
        'qt_dependencias' => "Quantidade das Dependências",
        'sn_internet' => "Acesso à internet",
        'sn_bandalarga' => "Internet Banda Larga",
        'qt_computadoradm' => "Total de Computadores do Administrativo",
        'qt_computadoraluno' => "Total de Computadores usado para alunos",
        'sn_computador' => "Existe Computadores",
        'nr_cpfdiretorresponsavel' => "CPF",
        'nm_diretorresponsavel' => "Nome Diretor/Responsável",
        'tp_cargogestorescolar' => "Cargo",
        'nm_emaildiretor' => "Email",
        'nr_cpfdiretorresponsavelsituacao' => "CPF",
        'nm_diretorresponsavelsituacao' => "Nome Diretor/Responsável",
        'tp_cargogestorescolarsituacao' => "Cargo",
        'nm_emaildiretorsituacao' => "Email"

    ],

];
