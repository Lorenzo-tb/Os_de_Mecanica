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
        'total',
        'aprovado',
        'pronto',
        'entregue',
        'equipe_id',
        'carro_id',
        'peca_id'
    ];

    // Relação com a equipe
    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id');
    }

    // Relação com o carro
    public function carro()
    {
        return $this->belongsTo(Carro::class, 'carro_id');
    }

    public function peca()
    {
        return $this->belongsTo(Peca::class, 'peca_id');
    }
}
