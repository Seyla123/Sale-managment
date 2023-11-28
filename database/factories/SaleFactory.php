<?php

namespace Database\Factories;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'SaleCode' => $this->faker->unique()->word,
            'ProductID' => $this->faker->numberBetween(1, 10), // Assuming product IDs exist in the 'Products' table
            'UserID' => $this->faker->numberBetween(1, 10), // Assuming user IDs exist in the 'users' table
            'SaleQty' => $this->faker->numberBetween(1, 50),
            'TotalPrice' => $this->faker->randomFloat(2, 10, 1000), // Random decimal between 10 and 1000
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
