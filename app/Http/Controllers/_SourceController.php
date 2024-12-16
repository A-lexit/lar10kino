<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{

    public function index()
    {
        //
        $sources = Source::paginate(20);
        return view('sources.index', compact('sources'));
    }

    public function show($slug)
    {
        $source = Source::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $source->films()->with('category')->orderBy('id', 'desc')->paginate(2);          //20   На один запит в консолі менше
        return view('sources.show', compact('source', 'films'));
       //return view('categories.show');
    }


}
