<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{

    public function index()
    {
        //
        $qualities = Quality::paginate(20);
        return view('qualities.index', compact('qualities'));
    }

    public function show($slug)
    {
        $quality = Quality::where('slug', $slug)->firstOrFail();
        $films = $quality->films()->orderBy('id', 'desc')->paginate(20);
        return view('qualities.show', compact('quality', 'films'));
       //return view('qualities.show');
    }


}
