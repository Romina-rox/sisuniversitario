<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    use HasFactory;

    protected $table = 'gestions';//nombre de la base de datos 

    protected $fillable = [//los datos que deseo que se muestren en la base de datos
        'nombre',
    ];
}
