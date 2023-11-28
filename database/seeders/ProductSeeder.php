<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 10 records
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'ProductName'    => "Product " . $i,
                'CategoryID'     => rand(1, 5), // Assuming you have categories with IDs 1 to 5
                'Barcode'        => "Barcode " . $i,
                'Expiredate'     => now()->addDays(rand(1, 365)), // Random expiry date within the next year
                'Qty'            => rand(1, 100),
                'UnitPriceIn'    => rand(10, 100),
                'UnitPriceOut'   => rand(100, 200),
                // You can add more fields as needed
            ]);
        }
    }
}
