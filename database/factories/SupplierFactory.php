<?php

namespace Database\Factories;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'SupplierName' => $this->faker->name,
            'JobTitle' => $this->faker->jobTitle,
            'CompanyName' => $this->faker->company,
            'Phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'Address' => $this->faker->address,
            'IsDeleted' => $this->faker->boolean,
        ];
    }
}
