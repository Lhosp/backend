<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public function projets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Projet::class);
    }
    public function devis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Devis::class);
    }
}
