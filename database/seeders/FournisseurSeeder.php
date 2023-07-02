<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        $fournisseurs = [];
        for ($i = 0; $i < 10; $i++) {
            $fournisseurs[] = [
                'prenom' => $faker->firstName,
                'nom' => $faker->lastName,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->email,
                'article_id' => $faker->numberBetween(1, 10),
            ];
        }
        \DB::table('fournisseurs')->insert($fournisseurs);
    }
}
