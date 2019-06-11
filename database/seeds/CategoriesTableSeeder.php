<?php

use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'Business',
            'description' => 'Include finance and economics'
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Kids',
            'description' => 'Include Animals and comics'
        ]);
        Category::create([
            'id' => 3,
            'name' => 'Science',
            'description' => 'Include Medicine and biology'
        ]);
        Category::create([
            'id' => 4,
            'name' => 'Cooking',
            'description' => 'Include desserts and baking'
        ]);
        Category::create([
            'id' => 5,
            'name' => 'History',
            'description' => 'Include modern and medieval histoy'
        ]);
    }
}
