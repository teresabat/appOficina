<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'modelo', 
        'marca', 
        'ano', 
        'data_ingresso', 
        'orcamento', 
        'nome_mecanico', 
        'metodo_pagamento',
    ];
}
