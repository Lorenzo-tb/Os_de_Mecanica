<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome'];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'equipe_id');
    }
}
