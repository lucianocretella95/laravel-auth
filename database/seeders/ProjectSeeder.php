<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use Faker\Generator as Faker;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <20 ; $i++) { 
            $newProject = new Project();
            $newProject-> name = $faker->sentence(2);
            $newProject-> description = $faker->paragraph(4);
            $newProject-> save();
        }
    }
}
