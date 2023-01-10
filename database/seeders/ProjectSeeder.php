<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faher\Generator as Faker;

use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            $project = new project();
            $project->title = $faker->sentence(3);
            $project->slug = str::slug($project->$title, '-'); //lo slug viene creato dal title sostituendo gli spazi con -
            $project->description = $faker->text();
            $project->save();
        }
    }
}