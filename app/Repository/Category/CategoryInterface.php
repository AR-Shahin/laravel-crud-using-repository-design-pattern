<?php

namespace App\Repository\Category;

use App\Models\Category;
use Illuminate\Http\Request;

interface CategoryInterface
{
    public function getAllCategory();
    public function store($request);
    public function show(Category $category);
    public function update($request, Category $category);
    public function destroy(Category $category);
}
