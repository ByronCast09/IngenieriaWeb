<?php

namespace App\Models;

use App\Models\Prueba;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'categoria'];

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }

    public function videoLinks()
    {
        return $this->hasMany(VideoLink::class);
    }

    public function pruebas()
    {
        return $this->hasMany(Prueba::class);
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class)->withPivot('progreso', 'completado');
    }
}