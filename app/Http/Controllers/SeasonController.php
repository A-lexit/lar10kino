<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{

    public function index()
    {
        $seasons = Season::paginate(20);
        return view('seasons.index', compact('seasons'));
    }


    public function show($slug)
    {
        $season = Season::where('slug', $slug)->firstOrFail();
        $films = $season->films()->orderBy('id', 'desc')->paginate(20);
        return view('seasons.show', compact('season', 'films'));
       //return view('categories.show');
    }

}
