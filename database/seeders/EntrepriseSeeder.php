<?php

namespace Database\Seeders;

use App\Enums\TvaEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tvas = [
            'CH', 'ESP', 'FR', 'NULL', 'PT'
        ];
        $faker = \Faker\Factory::create('fr_FR');
        $entreprises = [];
        for ($i = 0; $i < 10; $i++) {
            $entreprises[] = [
                'nom' => $faker->company,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->email,
                'tva_number' => $faker->vat,
                'tva' => $faker->randomElement($tvas),
                'user_id' => $faker->numberBetween(1, 10)
            ];
        }
        \DB::table('entreprises')->insert($entreprises);
    }
}
