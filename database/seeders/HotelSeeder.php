<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $standings = [
            'Midscale', 'Luxe', 'Lifestyle', 'Economic'
        ];
        $faker = \Faker\Factory::create('fr_FR');
        $hotels = [];
        for ($i = 0; $i < 10; $i++) {
            $hotels[] = [
                'nom' => $faker->company,
                'nbChambre' => $faker->numberBetween(1, 100),
                'nbRestaurant' => $faker->numberBetween(1, 100),
                'projet_id' => $faker->numberBetween(1, 10),
                'standing'=> $faker->randomElement($standings)
            ];
    }
        \DB::table('hotels')->insert($hotels);
    }
}
