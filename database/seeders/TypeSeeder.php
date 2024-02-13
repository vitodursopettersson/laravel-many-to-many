<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = new Type();
        $type->name = 'Front-end';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();

        $type = new Type();
        $type->name = 'Back-end';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();

        $type = new Type();
        $type->name = 'Branding';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();

        $type = new Type();
        $type->name = 'UI-UX';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();

        $type = new Type();
        $type->name = 'Editorial';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();

        $type = new Type();
        $type->name = 'Full-stack';
        $type->slug = Str::of($type->title)->slug('-');
        $type->description = '';
        $type->save();
    }
}
