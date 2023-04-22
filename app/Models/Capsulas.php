<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capsulas extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo  ',
        'foto',
        'descripcion',
        'mas_detalles',
    ];

}
