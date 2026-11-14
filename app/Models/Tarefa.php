<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    // Define os campos que têm permissão para serem preenchidos em massa
    protected $fillable = [
        'titulo',
        'descricao',
    ];
}
