<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
        $clients = [];
        for ($i = 0; $i < 10; $i++) {
            $clients[] = [
                'prenom' => $faker->firstName,
                'nom' => $faker->lastName,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->email,
                'type' => $faker->randomElement(['P', 'E']),
                'tva_number' => $faker->vat,
                'tva'=> $faker->randomElement($tvas)
            ];
        }
        \DB::table('clients')->insert($clients);


    }
}
