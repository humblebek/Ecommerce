<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ProductFactory extends Factory
{

    public function definition(): array
    {

        return [
                "category_id" => rand(1, 5),
                "name" => [
                    "uz" => fake()->sentence(3),
                    "ru" => 'Массивная книжная полка',
                ],
                "price" => Faker::create()->numberBetween(10000, 100000),
                "description" => [
                    "uz" => fake()->paragraph(5),
                    "ru" => 'Удобный диван стоит у окна. Деревянный стол украшает гостиную.Большой шкаф идеально подходит для хранения одежды.',
                ],
        ];
    }
}
