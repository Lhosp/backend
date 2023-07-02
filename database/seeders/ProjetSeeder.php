<?php

namespace Database\Seeders;

use App\Enums\LocationEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loc = [
            'MONTAGNE','MER','CAMPAGNE','VILLE'
        ];
        $faker = \Faker\Factory::create('fr_FR');
        $projets = [];
        for ($i = 0; $i < 10; $i++) {
            $projets[] = [
                'nom' => $faker->company,
                'description' => $faker->text,
                'client_id' => $faker->numberBetween(1, 10),
                'entreprise_id' => $faker->numberBetween(1, 10),
                'location'=>$faker->randomElement($loc)
            ];
        }
        \DB::table('projets')->insert($projets);
    }
}
