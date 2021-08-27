<?php

namespace App\Repository\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AnotherCategory implements CategoryInterface
{
    protected $url = 'http://127.0.0.1:8001/api/';
    public function getAllCategory()
    {
        $res = Http::get($this->url . 'category');

        return json_decode($res->body());
    }

    public function store($request)
    {
        //info($request['name']);
        $response = Http::post($this->url . 'category', [
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'user_id' => 1,
        ]);
    }
    public function show(Category $category)
    {
        return $category;
    }

    public function update($request, Category $category)
    {
        return $category->update($request);
    }
    public function destroy($category)
    {
        info($this->url . 'category/' . $category);
        $response = Http::delete($this->url . 'category/' . $category);
        //   $category->delete();
    }
}
