<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{

    public function show($slug)
    {
        $category = Category::findBySlug($slug);
        /*$category = Category::where('slug', $slug)->firstOrFail();*/

        $films = $category->films()->where('statuss', 0)->pagFilm(40);

        /*$films = $category->films()->orderBy('id', 'desc')->paginate(20);*/
        return view('categories.show', compact('category', 'films'));
       //return view('categories.show');
    }
}
