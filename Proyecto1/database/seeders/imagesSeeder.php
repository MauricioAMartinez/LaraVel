<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/04/889698502238.jpg',
            'img' => '',
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/04/889698486101.jpg',
            'img' => '',
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/04/889698486033.jpg',
            'product_id' => 3,
            'img' => '',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/02/med0094.jpeg',
            'img' => '',
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/02/med0098.jpeg',
            'img' => '',
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/04/192936048604.jpeg',
            'img' => '',
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/01/gor0175.jpeg',
            'img' => '',
            'product_id' => 7,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/02/gor0182.jpeg',
            'img' => '',
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2021/01/mal0084.jpeg',
            'img' => '',
            'product_id' => 9,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://i0.wp.com/toogeek.co/wp-content/uploads/2021/03/B07NVP9VD7.jpg?fit=946%2C942&ssl=1',
            'img' => '',
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://i0.wp.com/toogeek.co/wp-content/uploads/2021/03/B07NVP9VD7-1.jpg?fit=700%2C994&ssl=1',
            'img' => '',
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://i0.wp.com/toogeek.co/wp-content/uploads/2021/03/B07NVP9VD7-2.jpg?fit=1000%2C732&ssl=1',
            'img' => '',
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
        DB::table('images')->insert([
            'url' => 'https://i2.wp.com/toogeek.co/wp-content/uploads/2021/03/B07NVP9VD7-3.jpg?fit=627%2C994&ssl=1',
            'img' => '',
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
       
        DB::table('images')->insert([
            'url' => 'https://toogeek.co/wp-content/uploads/2020/12/mal0078.jpeg',
            'img' => '',
            'product_id' => 11,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            
        ]);
    }
}