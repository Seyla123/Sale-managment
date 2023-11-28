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
            'ProductName' => $this->faker->word,
            'CategoryID' => $this->faker->numberBetween(1, 5), // Assuming category IDs exist in the 'category' table
            'Barcode' => $this->faker->ean13,
            'Expiredate' => $this->faker->dateTimeThisDecade,
            'Qty' => $this->faker->numberBetween(1, 100),
            'UnitPriceIn' => $this->faker->randomFloat(2, 1, 100),
            'UnitPriceOut' => $this->faker->randomFloat(2, 10, 200),
            'ProductImage' => 'default.png',
            'IsDeleted' => 0,
        ];
    }
}
