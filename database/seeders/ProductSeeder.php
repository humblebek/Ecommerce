<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Stock; // Make sure to import the Stock model
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 50 products using the Product factory
        $products = Product::factory()->count(50)->create();

        // Iterate through each product
        foreach ($products as $product) {
            // Create a stock entry for each product
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 7),
                    ],
                ]),
            ]);
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 7),
                    ],
                ]),
            ]);
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1, 5),
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(6, 7),
                    ],
                ]),
            ]);
        }
    }
}
