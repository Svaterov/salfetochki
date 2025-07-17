<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;

class CategoryController extends Controller {
    public function show($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $cars = Car::where('category_id', $category->id)->get();
        return view('categories.show', compact('category', 'cars'));
    }
}