<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoLink extends Model
{
    use HasFactory;

    protected $fillable = ['curso_id', 'url'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
