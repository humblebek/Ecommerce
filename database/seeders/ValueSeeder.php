<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            'name' => json_encode([
                'uz' => "Qizil",
                "ru" => "Красный"
            ])
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => json_encode([
                "uz" => "Yashil",
                "ru" => "Зеленый"
            ])
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => json_encode([
                "uz" => "Ko'k",
                "ru" => "Синий"
            ])
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => json_encode([
                "uz" => "Sariq",
                "ru" => "Желтый"
            ])
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => json_encode([
                "uz" => "Qora",
                "ru" => "Чёрный"
            ])
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => json_encode([
                "uz" => "MDF",
                "ru" => "МДФ"
            ])
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => json_encode([
                "uz" => "LDSP",
                "ru" => "ЛДСП"
            ])
        ]);
    }

}
