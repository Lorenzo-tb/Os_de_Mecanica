<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servicos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'entrada',
        'defeito',
        'conserto',
        'orcamento',
        'total',
        'aprovado',
        'pronto',
        'entregue',
        'equipe_id',
        'carro_id',
    ];

    // Relação com a equipe
    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    // Relação com o carro
    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}
