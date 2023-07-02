<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Projet
{
    protected $table = 'hotels';

    public static function findHotelByProjectId($hotel_id)
    {
        return Hotel::find($hotel_id);
    }
    public static function findHotelRestaurantsByProjectId($hotel_id)
    {
        return Hotel::find($hotel_id)->restaurantHotels;
    }
    public static function findRestaurantByProjectId($restaurant_id)
    {
        return Restaurant::find($restaurant_id);
    }

    public function projet(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Projet::class);
    }

    public function restaurantHotels(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RestaurantHotel::class);
    }

//    protected $casts = [
//        'standing' => StandingEnum::class
//    ];

    public function restaurtantHotels()
    {
        return $this->hasMany(RestaurantHotel::class);

    }
    public function devis(){
        return $this->hasMany(Devis::class);
    }
}
