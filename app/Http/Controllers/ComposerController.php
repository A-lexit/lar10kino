<?php

namespace App\Http\Controllers;

use App\Models\Composer;
use Illuminate\Http\Request;

class ComposerController extends Controller
{

    public function index()
    {
        //
        $composers = Composer::paginate(20);
        return view('composers.index', compact('composers'));
    }


    public function show($slug)
    {
        $composer = Composer::where('slug', $slug)->firstOrFail();
        $films = $composer->films()->orderBy('id', 'desc')->paginate(20);
        return view('composers.show', compact('composer', 'films'));
       //return view('categories.show');
    }

}
