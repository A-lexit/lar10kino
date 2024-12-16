<?php

namespace App\Http\Controllers;

use App\Models\Caption;
use Illuminate\Http\Request;

class CaptionController extends Controller
{

    public function index()
    {
        //
        $captions = Caption::paginate(20);
        return view('captions.index', compact('captions'));
    }

    public function show($slug)
    {
        $caption = Caption::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $caption->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше
        return view('captions.show', compact('caption', 'films'));
       //return view('categories.show');
    }


}
