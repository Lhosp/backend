<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Entreprise extends Model
{
    use HasFactory, Notifiable;


    public function projets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Projet::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
