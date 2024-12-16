<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function index()
    {
        //
        $statuses = Status::paginate(20);
        return view('statuses.index', compact('statuses'));
    }


    public function show($slug)
    {
        $status = Status::where('slug', $slug)->firstOrFail();
        $films = $status->films()->orderBy('id', 'desc')->paginate(20);
        return view('statuses.show', compact('status', 'films'));
       //return view('categories.show');
    }

}
