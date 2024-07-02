<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }


    public function store(StoreCategoryRequest $request)
    {
        $StoredCategory = Category::create($request->all());
        return response()->json(['message' => 'Category stored successfully', 'Category' => $StoredCategory], 201);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
