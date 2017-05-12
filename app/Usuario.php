<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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
    protected $fillable = ['grupo_usuario_id', 'nome', 'slug', 'email', 'password', 'dataNascimento', 'dataBatismo', 'celula_id', 'celular', 'celularWhatsapp', 'estadoCivil', 'numeroFilhos', 'endereco', 'numeroEndereco', 'cepEndereco', 'bairroEndereco', 'cidadeEndereco', 'ufEndereco', 'escolaridade', 'cursoEscolaridade', 'profissao', 'desempregado', 'anosDesempregado', 'doadorSangue', 'tipoSanguineo', 'atendimentoEspecial', 'descrisaoAtendimentoEspecial', 'remedioControlado', 'descrisaoRemedioControlado', 'necessidadeBasica', 'saiuOutraIgreja', 'descrisaoSaiuOutraIgreja', 'filantropico', 'grupoFilantropico', 'dizimista', 'encontroComDeus', 'escolaDiscipulos', 'descrisaoEscolaDiscipulos', 'conheceMinisteriosPaulo', 'papelCorpoCristo', 'cristaoComPolitica', 'descrisaoCristaoComPolitica', 'formacaoProfissionalParteChamado', 'formacaoAcademicaAliadoChamado', 'estouDispostoServirComMeuTalento', 'vontadeServirEmDepartamento', 'atividadesPreferidasParaTempoLivre', 'jesusParaVoce', 'remember_token', 'departamento_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['dataNascimento', 'dataBatismo'];

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

    public function setDataBatismoAttribute($dataBatismo)
    {
        if (!is_null($dataBatismo)) {
            $data_formatada = Carbon::createFromFormat('d/m/Y', $dataBatismo);
            $this->attributes['dataBatismo'] = $data_formatada->format('Y-m-d');
        }
    }

    public function getDataBatismoAttribute()
    {
        $data_formatada = Carbon::createFromFormat('Y-m-d', $this->attributes['dataBatismo']);
        return $data_formatada->format('d/m/Y');
    }

    public function setDataNascimentoAttribute($dataNascimento)
    {
        if (!is_null($dataNascimento)) {
            $data_formatada = Carbon::createFromFormat('d/m/Y', $dataNascimento);
            $this->attributes['dataNascimento'] = $data_formatada->format('Y-m-d');
        }
    }

    public function getDataNascimentoAttribute()
    {
        $data_formatada = Carbon::createFromFormat('Y-m-d', $this->attributes['dataNascimento']);
        return $data_formatada->format('d/m/Y');
    }
}
