<?php

namespace App\Http\Controllers;

use App\Models\Actor;

use Illuminate\Http\Request;

class ActorController extends Controller
{

    public function index()
    {
        //
        $actors = Actor::paginate(20);
        return view('actors.index', compact('actors'));
    }


    public function show($slug)
    {
        $actor = Actor::firstFilm($slug);
      //$films = $actor->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $actor->films()->with('category')->pagFilm(100);          //20   На один запит в консолі менше
        return view('actors.show', compact('actor', 'films'));
       //return view('categories.show');
    }


}
