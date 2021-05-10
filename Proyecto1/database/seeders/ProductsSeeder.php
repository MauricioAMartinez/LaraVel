<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => 'Figura Shenlong 10',
            'description' => 'Funko POP Dragon Ball Anime Shenron, Esferas Del Dragon',
            'price' => 249900,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/9Hbd1QeI1Og?rel=0&amp;autoplay=1",
            'available' => 1,
            'discount' => 20
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Evil Buu',
            'description' => 'Figura Evil Buu Funko POP Dragon Ball Anime',
            'price' => 69900,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/-r27tgxNr1I?rel=0&amp;autoplay=1",
            'available' => 1,
            'discount' => 20
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Majin Vegeta Super Saiyayin',
            'description' => 'Figura Majin Vegeta Super Saiyayin Funko POP Dragon Ball Anime',
            'price' => 69900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/-r27tgxNr1I?rel=0&amp;autoplay=1",
            'discount' => 30
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Reptar COCOCAT Rugrats',
            'description' => 'Medias Largas Reptar COCOCAT Rugrats Animados',
            'price' => 25900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/xfzynwmrlok?rel=0&amp;autoplay=1",
            'discount' => 20
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Jack Skellington ',
            'description' => 'Medias Largas Jack Skellington y Zero COCOCAT The Nightmaer Before Christmas Disney',
            'price' => 25900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/57HgVww62Aw?rel=0&amp;autoplay=1",
            'discount' => 25
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Reptar Hyp Rugrats ',
            'description' => 'Medias Reptar Hyp Rugrats Animados Set X 2',
            'price' => 51329,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/xfzynwmrlok?rel=0&amp;autoplay=1",
            'discount' => 5
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Gorra Rick PT Rick ',
            'description' => 'Gorra Rick PT Rick and Morty Animados Pickle Rick con Mosaico',
            'price' => 45900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/E6TUs69Cw94?rel=0&amp;autoplay=1",
            'discount' => 15
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Gorra Malla Cuphead',
            'description' => 'Gorra Malla Cuphead Pictograma Cuphead Videojuegos Pixel Art',
            'price' => 40900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/L_a2i6g83lg?rel=0&amp;autoplay=1",
            'discount' => 23
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Maleta Deadpool',
            'description' => 'Maleta Deadpool PT Marvel Bolsillos cafes',
            'price' => 199900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/4vaN01VLYSQ?rel=0&amp;autoplay=1",
            'discount' => 18
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Mochila Academia Cosplay',
            'description' => 'y Hero Luminoso Mochila Academia Cosplay con puerto de carga USB Bookbag Daypack (Entrega de 4 a 5 semanas una vez realizado el pago)',
            'price' => 159900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/G1IbRujko-A?rel=0&amp;autoplay=1",
            'discount' => 32
        ]);
        DB::table('products')->insert([
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            'name' => ' Maleta Grande Batman',
            'description' => 'Maleta Grande Batman PT Batman DC Comics En cuerina (Reflectiva)',
            'price' => 210900,
            'available' => 1,
            'stock' => 10,
            'urlvideo' => "https://www.youtube.com/embed/rrmUk2YUm14?rel=0&amp;autoplay=1",
            'discount' => 12
        ]);













    }
}