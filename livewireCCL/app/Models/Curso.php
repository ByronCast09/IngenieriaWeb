<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'video_link', 'recurso_path'];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }
}