<?php

namespace App\Http\Controllers;

use App\Models\Selection;
use Illuminate\Http\Request;

class SelectionController extends Controller
{

    public function index()
    {
        //
        $selections = Selection::paginate(20);
        return view('selections.index', compact('selections'));
    }

    public function show($slug)
    {
        $selection = Selection::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $selection->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше
        return view('selections.show', compact('selection', 'films'));
       //return view('categories.show');
    }


}
