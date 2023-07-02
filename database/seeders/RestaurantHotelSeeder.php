<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fourchettes = [
            '€', '€€', '€€€', '€€€€','ILLIMITE'
        ];
        $faker = \Faker\Factory::create('fr_FR');
        $restaurantHotels = [];
        for ($i = 0; $i < 10; $i++) {
            $restaurantHotels[] = [
                'nom' => $faker->company,
                'nbCouvert' => $faker->numberBetween(1, 100),
                'nbService' => $faker->numberBetween(1, 100),
                'petitDej' => $faker->boolean,
                'fourchette_prix' => $faker->randomElement($fourchettes),
                'hotel_id' => $faker->numberBetween(1, 10)
            ];
        }
        \App\Models\RestaurantHotel::insert($restaurantHotels);
    }
}
