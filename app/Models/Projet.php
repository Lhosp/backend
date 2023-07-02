<?php

namespace App\Models;

use App\Enums\LocationEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'projets';

    public static function getClientProjects($id)
    {
        return Projet::where('client_id', $id)->get();
    }

    public static function findById($id)
    {
        return Projet::find($id);
    }

    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function entreprise(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function hotel(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Hotel::class);
    }
    public function restaurant(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Restaurant::class);
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel()->first();
    }
//    protected $casts = [
//        'location' => LocationEnum::class
//    ];
}
