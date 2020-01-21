<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name', 'email', 'telefone', 'password', 'category'
    ];
    
}
