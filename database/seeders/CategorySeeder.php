<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Dev',
            'slug' => 'web-dev'
        ]);

        Category::create([
            'name' => 'Object Oriented Programming',
            'slug' => 'object-oriented-programming'
        ]);

        Category::create([
            'name' => 'Algorithm and Data Structure',
            'slug' => 'algorithm-and-data-structure'
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial intelligence'
        ]);
    }
}
