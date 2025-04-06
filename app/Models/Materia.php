<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materias';//nombre de la base de datos 

    protected $fillable = [//datos que quiero en la base de datos
        'carrera_id',
        'nombre',
        'codigo',
    ];

    //relacion de muchoa a muchos inversa
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
}
