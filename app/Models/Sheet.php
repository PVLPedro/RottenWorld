<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    public $timestamps = false;

    protected $fillable = [

        'user_id',

        'tipo',
        'nome',
        'idade',
        'aniversario',
        'alcunha',
        'profissao_atual',
        'ex_profissoes',
        'experiencias',
        'hobbies',
        'aparencia',
        'resumo',
        'historia',
        'habilidade_um',
        'habilidade_dois',

        'AFOR',
        'ADES',
        'ACON',
        'AINT',
        'APER',
        'AVON',

        'PAMB',
        'PAMF',
        'PACR',
        'PATL',
        'PBRI',
        'PESQ',
        'PFUR',

        'PART',
        'PCOC',
        'PCOD',
        'PEPL',
        'PINV',
        'PLAD',
        'PPRS',

        'PCAC',
        'PCIN',
        'PCME',
        'PCMA',
        'PCMI',
        'PCPO',

        'PBLE',
        'PCRI',
        'PDIP',
        'PTIM',
        'PTUI',
        'PLID',

        'QARM',
        'QBEL',
        'QCOR',
        'QCAS',
        'QDDM',
        'QBRX',
        'QGEL',
        'QGEN',
        'QTRA',
        'QSEA',
        'QADA',
        'QFDA',
        'QJDP',
        'QLAB',
        'QMAL',
        'QCNH',
        'QMMF',
        
        'DANT',
        'DAZA',
        'DFEI',
        'DPCR',
        'DCOV',
        'DCRE',
        'DMDS',
        'DPSI',
        'DPSE',
        'DPRE',
        'DPRO',
        'DTDA',
        'DIRR',
        'DSNO',
        'DPLH',
        'DVRU',
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}