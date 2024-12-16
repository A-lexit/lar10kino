<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index()
    {
        //
        $languages = Language::paginate(20);
        return view('languages.index', compact('languages'));
    }


    public function show($slug)
    {
        $language = Language::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $language->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше
        return view('languages.show', compact('language', 'films'));
       //return view('categories.show');
    }


}
