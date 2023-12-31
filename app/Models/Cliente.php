<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'telefone', 'email', 'cpf', 'endereco'];

    public function carros()
    {
        return $this->hasMany(Carro::class, 'cliente_id');
    }
}
