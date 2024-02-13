<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = new Project();
        $project->title = 'Test Project 1';
        $project->slug = Str::of($project->title)->slug('-');
        $project->description = 'Lorem Ipsum';
        $project->year = 2024;
        $project->save();
    }
}
