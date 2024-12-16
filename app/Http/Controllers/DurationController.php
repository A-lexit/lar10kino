<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use Illuminate\Http\Request;

class DurationController extends Controller
{

    /*public function index()
    {
        //
        $durations = Duration::paginate(20);
        return view('durations.index', compact('durations'));
    }*/


    /*public function show($slug)
    {
        $duration = Duration::where('slug', $slug)->firstOrFail();
        $films = $duration->films()->orderBy('id', 'desc')->paginate(2  );
        return view('durations.show', compact('duration', 'films'));
       //return view('categories.show');
    }*/

}
