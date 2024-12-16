<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function index()
    {
        //
        $genres = Genre::paginate(20);
        return view('genres.index', compact('genres'));
    }

    public function show($slug)
    {
        $genre = Genre::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $genre->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше
        return view('genres.show', compact('genre', 'films'));
       //return view('categories.show');
    }


}
