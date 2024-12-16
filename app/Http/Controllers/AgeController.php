<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgeController extends Controller
{

    public function index()
    {
        //
        $ages = Age::paginate(20);
        return view('ages.index', compact('ages'));
    }


    public function show($slug)
    {
        $age = Age::where('slug', $slug)->firstOrFail();
        $films = $age->films()->orderBy('id', 'desc')->paginate(20);
        return view('ages.show', compact('age', 'films'));
       //return view('categories.show');
    }

}
