<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{

    public function index()
    {
        //
        $years = Year::paginate(20);
        return view('years.index', compact('years'));
    }


    public function show($slug)
    {
        $year = Year::where('slug', $slug)->firstOrFail();
        $films = $year->films()->orderBy('id', 'desc')->paginate(20);
        return view('years.show', compact('year', 'films'));
       //return view('categories.show');
    }

}
