<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technology = new Technology();
        $technology->name = 'HTML';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'CSS';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'JavaScript';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'Vue.js';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'Bootstrap';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'Php';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();

        $technology = new Technology();
        $technology->name = 'Laravel';
        $technology->slug = Str::of($technology->name)->slug('-');
        $technology->save();
    }
}
