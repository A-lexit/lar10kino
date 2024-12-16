<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{

    public function index()
    {
        //
        $producers = Producer::paginate(20);
        return view('producers.index', compact('producers'));
    }


    public function show($slug)
    {
        $producer = Producer::where('slug', $slug)->firstOrFail();
      //$films = $actor->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $producer->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше
        return view('producers.show', compact('producer', 'films'));
       //return view('categories.show');
    }


}
