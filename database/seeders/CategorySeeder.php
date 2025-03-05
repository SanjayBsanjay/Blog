<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
        //
        public function run(): void
        {
            // Creating some sample categories
            Category::create([
                'name' => 'Technology',
                'featured' => 'Yes'
            ]);
    
            Category::create([
                'name' => 'Lifestyle',
                'featured' => 'No'
            ]);
    
            Category::create([
                'name' => 'Health',
                'featured' => 'No'
            ]);
    
            Category::create([
                'name' => 'Business',
                'featured' => 'Yes'
            ]);

            Category::create([
                'name' => 'Entertainment',
                'featured' => 'Yes',
            ]);
            
            Category::create([
                'name' => 'Science',
                'featured' => 'No',
            ]);
            
            Category::create([
                'name' => 'Education',
                'featured' => 'Yes',
            ]);
        }
    }



