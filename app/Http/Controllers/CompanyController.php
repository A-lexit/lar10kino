<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        //
        $companies = Company::paginate(20);
        return view('companies.index', compact('companies'));
    }


    public function show($slug)
    {
        $company = Company::where('slug', $slug)->firstOrFail();
        $films = $company->films()->orderBy('id', 'desc')->paginate(20);
        return view('companies.show', compact('company', 'films'));
       //return view('categories.show');
    }


}
