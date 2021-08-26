<?php

namespace App\Repository\Category;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryRepository implements CategoryInterface
{
    public function getAllCategory()
    {
        return Category::latest()->get();
    }

    public function store($request)
    {
        return Category::create($request);
    }
    public function show(Category $category)
    {
        return $category;
    }

    public function update($request, Category $category)
    {
        return $category->update($request);
    }
    public function destroy(Category $category)
    {
        $category->delete();
    }
}
