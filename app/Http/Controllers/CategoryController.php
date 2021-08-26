<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Category\CategoryInterface;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }
    function getAllCat()
    {
        return $this->category->getAllCategory();
    }
    public function index()
    {
        //return $this->category->getAllCategory();
        return view('category', [
            'categories' => $this->category->getAllCategory()
        ]);
    }

    function store(Request $request)
    {
        // info($request);
        // $request->validate([
        //     'name' => ['required', 'exists:categories,name']
        // ]);

        $data['name'] = $request->name;
        $data['slug'] = Str::slug($request->name);
        //   return $data;
        return $this->category->store($data);
    }

    public function edit(Category $category)
    {
        return $this->category->show($category);
    }
    public function update(Request $request, Category $category)
    {
        $data['name'] = $request->name;
        $data['slug'] = Str::slug($request->name);
        return $this->category->update($data, $category);
    }
    public function destroy(Category $category)
    {
        $this->category->destroy($category);
    }
}
