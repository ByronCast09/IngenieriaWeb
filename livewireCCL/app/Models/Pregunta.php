<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = ['contenido'];

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }
}
