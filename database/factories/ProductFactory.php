<?php

namespace Database\Factories;

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
            'id_user' => $this->faker->word,
        'id_category' => $this->faker->word,
        'id_size' => $this->faker->word,
        'id_color' => $this->faker->word,
        'id_gender' => $this->faker->word,
        'id_brand' => $this->faker->word,
        'sku' => $this->faker->word,
        'title' => $this->faker->word,
        'description' => $this->faker->word,
        'price' => $this->faker->randomDigitNotNull,
        'stock' => $this->faker->randomDigitNotNull,
        'state' => $this->faker->word,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
