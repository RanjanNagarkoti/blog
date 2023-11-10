<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Entertainment"
        ]);

        Category::create([
            "name" => "Education"
        ]);

        Category::create([
            "name" => "Finance"
        ]);

        Category::create([
            "name" => "Business"
        ]);

        Category::create([
            "name" => "Health"
        ]);
    }
}
