<?php

namespace Database\Seeders;

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Mashxur',
                'ru' => 'Популярный'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Kровать'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Shkaf',
                'ru' => 'Полка'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Диван'
            ],
        ]);
    }
}
