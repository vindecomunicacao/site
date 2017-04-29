<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\AuditingTrait;

class Usuario extends Authenticatable
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'email', 'password', 'grupo_usuario_id', 'celula_id', 'cpf', 'dataNascimento', 'telefone', 'celular', 'celularWhatsapp', 'estadoCivil', 'slug', 'numeroFilhos', 'rendaFamiliar', 'endereco', 'numeroEndereco', 'cepEndereco', 'bairroEndereco', 'cidadeEndereco', 'ufEndereco', 'escolaridade', 'cursoEscolaridade', 'profissao', 'carro', 'casaPropria', 'moraPais', 'desempregado', 'anosDesempregado', 'planoSaude', 'doadorSangue', 'tipoSanguineo', 'atendimentoEspecial', 'descrisaoAtendimentoEspecial', 'remedioControlado', 'descrisaoRemedioControlado', 'gruposWhatsapp', 'necessidadeBasica', 'dataBatismo', 'saiuOutraIgreja', 'descrisaoSaiuOutraIgreja', 'filantropico', 'grupoFilantropico', 'dizimista', 'encontroComDeus', 'escolaDiscipulos', 'descrisaoEscolaDiscipulos', 'conheceMinisteriosPaulo', 'papelCorpoCristo', 'cristaoComPolitica', 'descrisaoCristaoComPolitica', 'papelIgrejaSociedade', 'formacaoProfissionalParteChamado', 'formacaoAcademicaAliadoChamado', 'estouDispostoServirComMeuTalento', 'vontadeServirEmDepartamento', 'descrisaoVontadeServirEmDepartamento', 'tocaInstrumentos', 'descrisaoTocaInstrumentos', 'propositoDeVidaNaTerra', 'propositoMinisterial', 'motivacaoParaFazerOQueJaFaz', 'atividadesPreferidasParaTempoLivre', 'jesusParaVoce'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function grupo_usuario()
    {
        return $this->belongsTo(GrupoUsuario::class);
    }

//    public function setPasswordAttribute($senha)
//    {
//        if($senha) {
//            $this->attributes['password'] =  bcrypt($senha);
//        }
//    }


}
