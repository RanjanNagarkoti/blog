<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            "title" => "The Art of Machine Learning",
            "description" => "Exploring the fascinating world of machine learning and its applications.",
            "category_id" => rand(1, 5),
        ]);
        
        Blog::create([
            "title" => "Unlocking the Secrets of the Universe",
            "description" => "A journey through astrophysics and the mysteries of our vast universe.",
            "category_id" => rand(1, 5),
        ]);
        
        Blog::create([
            "title" => "Financial Wisdom for Millennials",
            "description" => "Navigating the complexities of personal finance and investments for the new generation.",
            "category_id" => rand(1, 5),
        ]);
        
        Blog::create([
            "title" => "Innovative Business Strategies",
            "description" => "Examining modern business approaches and strategies for success in a dynamic market.",
            "category_id" => rand(1, 5),
        ]);
        
        Blog::create([
            "title" => "Holistic Health and Wellness",
            "description" => "Promoting a healthy lifestyle and well-being through holistic practices and mindful living.",
            "category_id" => rand(1, 5),
        ]);
    }
}
