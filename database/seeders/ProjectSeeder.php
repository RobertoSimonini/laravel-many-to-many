<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 3; $i++) {
            $project = new Project();

            $project->title = $faker->sentence(2);
            $project->image = $faker->imageUrl(300, 300);
            $project->description = $faker->paragraphs(2, true);
            $project->techonologies_used = $faker->sentence(3);

            $project->save();
        }
    }
}
