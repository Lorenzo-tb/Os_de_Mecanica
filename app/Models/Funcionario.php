<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'telefone', 'email', 'cpf', 'equipe_id'];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id');
    }
}
