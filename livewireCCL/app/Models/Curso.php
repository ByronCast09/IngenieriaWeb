<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}