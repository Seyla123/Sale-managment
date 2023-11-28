<?php

namespace Database\Factories;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'UserID' => $this->faker->numberBetween(1, 10), // Assuming user IDs exist in the 'users' table
            'SupplierID' => $this->faker->numberBetween(1, 5), // Assuming supplier IDs exist in the 'Supplier' table
            'ProductID' => $this->faker->numberBetween(1, 10), // Assuming product IDs exist in the 'Products' table
            'PurchaseQty' => $this->faker->numberBetween(1, 10),
            'TotalPrice' => $this->faker->randomFloat(2, 10, 1000), // Random decimal between 10 and 1000
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
