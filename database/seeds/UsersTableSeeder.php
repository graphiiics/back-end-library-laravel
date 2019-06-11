<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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

        for ($i=0; $i <20; $i++) { 
            $array_item=[
                'name'=>$faker->name($gender = null),
                'email'=>$faker->unique()->freeEmail(),
                'password'=>$faker->password(),
                'created_at'=>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
            ];
            array_push($items, $array_item);
        }


        foreach ($items as $item) {
            App\Models\User::create($item);
        }
    }
}
