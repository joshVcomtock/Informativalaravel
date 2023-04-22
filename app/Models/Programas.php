<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'foto',
        'contenido_a',
        'contenido_b',
        'titulo',
        'titulo_desc',
        'compemento',
    ];
}
