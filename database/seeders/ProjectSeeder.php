<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('db.projects');
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = Str::slug($project['title'], '-');
            ;
            $newProject->agency = $project['agency'];
            $newProject->year = $project['year'];
            $newProject->url = $project['url'];
            $newProject->save();
        }
        ;


    }
}