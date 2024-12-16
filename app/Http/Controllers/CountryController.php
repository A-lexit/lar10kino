<?php

namespace App\Http\Controllers;



use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        //
        $countries = Country::paginate(20);
        return view('countries.index', compact('countries'));
    }

    public function show($slug)
    {
        $country = Country::where('slug', $slug)->firstOrFail();
      //$films = $country->films()->orderBy('id', 'desc')->paginate(2  );                            //20
        $films = $country->films()->with('category')->orderBy('id', 'desc')->paginate(20);          //20   На один запит в консолі менше

        return view('countries.show', compact('country', 'films'));
       //return view('categories.show');
    }


}
