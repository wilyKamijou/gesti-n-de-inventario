<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe extends Model
{
    use HasFactory;

    protected $fillable = [
        'idInforme',
        'fechaInicio',
        'fechaFinal',
        'canCompras',
        'totCompras',
        'canVentas',
        'totVentas'
    ];
}
