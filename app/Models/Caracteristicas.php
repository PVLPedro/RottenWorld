<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    protected $table = 'caracteristicas';
    public $timestamps = false;

    protected $fillable = [
        'sheet_id',
        'AFOR', 'ADES', 'ACON', 'AINT', 'APER', 'AVON',
        'PAMB', 'PAMF', 'PACR', 'PATL', 'PBRI', 'PESQ', 'PFUR',
        'PART', 'PCOC', 'PCOD', 'PEPL', 'PINV', 'PLAD', 'PPRS',
        'PCAC', 'PCIN', 'PCME', 'PCMA', 'PCMI', 'PCPO',
        'PBLE', 'PCRI', 'PDIP', 'PTIM', 'PTUI', 'PLID',
        'QARM', 'QBEL', 'QCOR', 'QCAS', 'QDDM', 'QBRX', 'QGEL', 'QGEN', 'QTRA', 'QSEA', 'QADA', 'QFDA', 'QJDP', 'QLAB', 'QMAL', 'QCNH', 'QMMF',
        'DANT', 'DAZA', 'DFEI', 'DPCR', 'DCOV', 'DCRE', 'DMDS', 'DPSI', 'DPSE', 'DPRE', 'DPRO', 'DTDA', 'DIRR', 'DSNO', 'DPLH', 'DVRU',
    ];

    public function sheet()
    {
        return $this->belongsTo(Sheets::class, 'sheet_id', 'id_sheet');
    }
}