<?php

namespace App\Repository\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AnotherCategory implements CategoryInterface
{

    public function getAllCategory()
    {
        $res = Http::get('http://127.0.0.1:8001/api/category');

        return json_decode($res->body());
    }

    public function store(Request $request)
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
