<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Sheets extends Model
{
    protected $primaryKey = 'id_sheet';
    public $timestamps = false;

    protected $fillable = [
        'nome','idade','aniversario','alcunha','profissao_atual',
        'ex_profissoes','experiencias','hobbies','aparencia','resumo','historia'
    ];

    public function getRouteKeyName()
    {
        return 'id_sheet';
    }

    public function caracteristicas()
    {
        return $this->hasOne(Caracteristicas::class, 'sheet_id', 'id_sheet');
    }
}