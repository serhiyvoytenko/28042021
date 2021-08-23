<?php

namespace Database\Factories;

use App\Models\ProductEntity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductEntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductEntity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->colorName(),
            'cost' => $this->faker->randomNumber(3),
            'weight' => $this->faker->randomNumber(2),
            'depth' => $this->faker->randomNumber(2),
            'height' => $this->faker->randomNumber(2),
            'count' => $this->faker->randomNumber(4),
            'width' => $this->faker->randomNumber(2),
        ];
    }
}
