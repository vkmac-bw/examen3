<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documental extends Model
{
    protected $table = 'documentales';
    protected $fillable = ['titulo', 'duracion', 'poster', 'director_id'];

    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class);
    }
}