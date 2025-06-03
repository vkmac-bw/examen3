<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Director extends Model
{
    protected $table = 'directores';
    protected $fillable = ['nombre', 'nacionalidad'];

    public function documentales(): HasMany
    {
        return $this->hasMany(Documental::class);
    }
}