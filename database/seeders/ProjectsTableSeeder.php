<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0 ; $i < 10 ; $i++){

            $newProjects = new Project();
            $newProjects->name= $faker->word();
            $newProjects->surname= $faker->word();
            $newProjects->email=$faker->email();
            $newProjects->age= $faker->randomNumber(2,false);
            $newProjects->description=$faker->paragraph();
            $newProjects->img=$faker->image(null,640,480);
            $newProjects->save();
        }

    }
}