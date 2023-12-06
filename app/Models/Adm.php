<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    use HasFactory;

    protected $table = 'adm';
    protected $primaryKey = 'id';
    protected $fillable = ['cpf', 'senha'];
}
