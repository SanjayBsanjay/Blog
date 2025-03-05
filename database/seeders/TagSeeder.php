<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // tech
        Tag::firstOrCreate(['tag' => 'Laravel']);
        Tag::firstOrCreate(['tag' => 'PHP']);
        Tag::firstOrCreate(['tag' => 'Web Development']);
        Tag::firstOrCreate(['tag' => 'AI']);
        Tag::firstOrCreate(['tag' => 'Machine learning']);
        Tag::firstOrCreate(['tag' => 'Blockchain']);
        Tag::firstOrCreate(['tag' => 'Cybersecurity']);
        Tag::firstOrCreate(['tag' => '5G']);
        
        //bussiness
        Tag::firstOrCreate(['tag' => 'Marketing']);
        Tag::firstOrCreate(['tag' => 'E-Commerce']);
        Tag::firstOrCreate(['tag' => 'Business Strategy']);
        Tag::firstOrCreate(['tag' => 'Leadership']);
        Tag::firstOrCreate(['tag' => 'Entrepreneurship']);
        Tag::firstOrCreate(['tag' => 'Business']);
        Tag::firstOrCreate(['tag' => 'Management']);
        Tag::firstOrCreate(['tag' => 'Productivity']);

        //health
        $tag17 = Tag::firstOrCreate(['tag' => 'Mental Health']);
        $tag18 = Tag::firstOrCreate(['tag' => 'Nutrition']);
        $tag19 = Tag::firstOrCreate(['tag' => 'Wellness']);
        $tag20 = Tag::firstOrCreate(['tag' => 'Fitness']);
        $tag21 = Tag::firstOrCreate(['tag' => 'Healthy Habits']);
        $tag22 = Tag::firstOrCreate(['tag' => 'Health Tips']);
        $tag23 = Tag::firstOrCreate(['tag' => 'Health']);
        $tag24 = Tag::firstOrCreate(['tag' => 'Healthy Living']);

        //lifestyle
        Tag::firstOrCreate(['tag' => 'Minimalism']);
        Tag::firstOrCreate(['tag' => 'Travel']);
        Tag::firstOrCreate(['tag' => 'Decluttering']);
        Tag::firstOrCreate(['tag' => 'Mindfulness']);
        Tag::firstOrCreate(['tag' => 'Sustainability']);
        Tag::firstOrCreate(['tag' => 'Lifestyle']);
        Tag::firstOrCreate(['tag' => 'Positive Thinking']);
        Tag::firstOrCreate(['tag' => 'Work-Life Balance']);
        
    }



    }

