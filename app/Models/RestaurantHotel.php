<?php

namespace App\Models;

use App\Enums\FourchettePrixEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantHotel extends Model
{
    use HasFactory;

//    protected $casts=[
//        'fourchette_prix'=>FourchettePrixEnum::class
//    ];

    function hotel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
