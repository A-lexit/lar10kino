<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Category;

class SearchController extends Controller
{
    //

    public function index(Request $request) {

        $request->validate([
            's' => 'required',

            ]);

        //dd($request->all());

        $s = $request->s;
        $films = Film::where('title', 'LIKE', "%{$s}%")->orWhere('description', 'LIKE', "%{$s}%")->with('category')->paginate(30);

        return view('search', compact('films', 's'));

    }
}
