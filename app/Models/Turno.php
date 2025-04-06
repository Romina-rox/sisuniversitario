<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $table='turnos';//nombre de la base de datos de migrate

    protected $fillable = [//datos que quiero en la base de datos
        'nombre',
    ];

}
