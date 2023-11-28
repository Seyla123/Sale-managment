<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define 5 mart management categories
        $categories = [
            [
                'CategoryName' => 'Groceries',
                'Description' => 'All your grocery needs',
                'CreatedBy' => 'Seeder',
                'UpdatedBy' => 'Seeder',
                'IsDeleted' => 0,
            ],
            [
                'CategoryName' => 'Electronics',
                'Description' => 'Electronic gadgets and appliances',
                'CreatedBy' => 'Seeder',
                'UpdatedBy' => 'Seeder',
                'IsDeleted' => 0,
            ],
            [
                'CategoryName' => 'Clothing',
                'Description' => 'Fashion and apparel',
                'CreatedBy' => 'Seeder',
                'UpdatedBy' => 'Seeder',
                'IsDeleted' => 0,
            ],
            [
                'CategoryName' => 'Home and Garden',
                'Description' => 'Home decor and gardening supplies',
                'CreatedBy' => 'Seeder',
                'UpdatedBy' => 'Seeder',
                'IsDeleted' => 0,
            ],
            [
                'CategoryName' => 'Toys',
                'Description' => 'Children\'s toys and games',
                'CreatedBy' => 'Seeder',
                'UpdatedBy' => 'Seeder',
                'IsDeleted' => 0,
            ],
        ];

        // Insert categories into the database

        DB::table('category')->insert($categories);
    }
}
