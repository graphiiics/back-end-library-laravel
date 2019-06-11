<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Category; 
use App\Models\User; 

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [];
	    $faker = Faker::create();
    	$categories = Category::all();
    	foreach ($categories as $category) {
    		
	        for($i=0; $i<10; $i++){
                $status = 0;
                $user_random = null;

                if(rand(0,1)){
                    $status = 1;
                    $user_random = User::inRandomOrder()->first()->id;
                    //dd($user_random)
                }

	            $array_item = [
                    'name'=>$faker->sentence($nbWords = 4, $variableNbWords = true),
                    'author'=>$faker->name($gender = null),
                    'published_date'=>$faker->date($format = 'Y-m-d', $max = 'now'), 
                    'status'=>$status,
                    'user_id'=>$user_random,
                    'category_id'=>$category->id,
	            ];
	            array_push($items, $array_item);
	        }
    	}
        foreach($items as $item){
                \App\Models\Book::create($item);
        } 
    }
}
