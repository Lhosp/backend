<?php

namespace Database\Seeders;

use App\Enums\EmplacementEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $standings = [
            'Midscale', 'Luxe', 'Lifestyle', 'Economic'
        ];
        $size=['154x122','34x33','60x60'];
        $emplacement=['Chambre','Toilette','Entrée','Restaurant','Bar','Cuisine','Salle de réunion','Salle de sport','Spa','Piscine','Jardin','Terrasse','Balcon','Parking','Ascenseur','Escalier','Couloir','Réception','Bureau','Salle de bain','Salon','Salle à manger','Chambre froide','Cave','Buanderie','Laverie','Local technique','Local poubelle','Local à ski','Local à vélo','Local à poussette','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes','Local à bagages','Local à chaussures','Local à skis','Local à vélos','Local à poussettes'];
        $faker = \Faker\Factory::create('fr_FR');
        $articles = [];
        for ($i = 0; $i < 10; $i++) {
            $articles[] = [
                'ref' => $faker->localIpv4,
                'nom' => $faker-> sentence(2),
                'description' => $faker->text,
                'dimension' => $faker->randomElement($size),
                'image' => $faker->imageUrl(),
                'emplacements' => $faker->randomElement($emplacement),
                'hotel_id' => $faker->numberBetween(1, 10),
                'standing'=> $faker->randomElement($standings),
                'prix' => $faker->randomFloat(2, 0, 1000),
            ];
        }
        \DB::table('articles')->insert($articles);
    }
}
