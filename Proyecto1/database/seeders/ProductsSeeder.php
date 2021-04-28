<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <50 ; $i++) { 
            DB::table('products')->insert([
                'name' => 'product'.$i ,
                'description'=> $faker->text($maxNochars=100),
                'price'=> $faker->numberBetween(10000,1000000),
                'available'=> $faker->boolean($chanceOfGettingTrue = 50),
                'created_at' =>$faker->dateTime($max = 'now',$timezone =null),
                'updated_at' =>$faker->dateTime($max = 'now',$timezone =null),
            ]);
            
        }
    }
}
