<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class reviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 2,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 3,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 4,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 5,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 6,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 7,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 7,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 8,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 9,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 9,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 9,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 10,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 11,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 11,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
        DB::table('reviews')->insert([
            'name'=> $faker->name(),
            'review'=> $faker->text(),
            'email'=> $faker->email(),
            'score'=> 4,
            'product_id' => 11,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        ]);
    }
   
}
