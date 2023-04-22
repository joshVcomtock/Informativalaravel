<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informaciones extends Model
{

    use HasFactory;
    protected $fillable = [
        'nombre',
        'foto',
        'descripcion',
        'mision',
        'foto_m',
        'vision',
        'foto_v',
        
    ];
}
