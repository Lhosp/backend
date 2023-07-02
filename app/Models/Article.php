<?php

namespace App\Models;

use App\Enums\EmplacementEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $casts = [
        'emplacement' => EmplacementEnum::class,
        'standing' => StandingEnum::class
    ];
}
