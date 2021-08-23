<?php

namespace Database\Factories;

use App\Models\Orders;
use App\Models\ProductEntity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpseclib\Crypt\Random;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>ProductEntity::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'quantity'=>$this->faker->randomNumber(3),
            'sum'=>$this->faker->randomNumber(5),
        ];
    }
}
