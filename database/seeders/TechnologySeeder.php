<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <20 ; $i++) { 
            $newTechnoloy = new Technology();
            $newTechnoloy-> name = $faker->sentence(1);
            $newTechnoloy-> save();
        }
    }
}
