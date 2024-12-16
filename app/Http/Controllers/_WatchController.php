<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{

    public function index()
    {
        //
        $watches = Watch::paginate(20);
        return view('watches.index', compact('watches'));
    }


    public function show($slug)
    {
        $watch = Watch::where('slug', $slug)->firstOrFail();
        $films = $watch->films()->orderBy('id', 'desc')->paginate(2  );
        return view('watches.show', compact('watch', 'films'));
       //return view('categories.show');
    }

}
