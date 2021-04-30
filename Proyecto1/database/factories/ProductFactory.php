<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'name' => 'product'. $this->faker->numberBetween(1,Product::count()),
            'price'=>$this->faker-> numberBetween(10000,1000000),
            'available'=>$this->faker->boolean(),
            'description'=>$this-> faker->text(),
        ];
    }
}
