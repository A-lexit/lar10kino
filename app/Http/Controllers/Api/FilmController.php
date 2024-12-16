<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Resources\FilmResource;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmController extends Controller

{


    public function show(Request $request) {

        $slug = $request->get('slug');
        $film = Film::with('comments', 'state', 'user')->where('slug', $slug)->firstOrFail();;

        return new FilmResource($film);
    }

    public function viewsIncrement(Request $request) {

        $slug = $request->get('slug');
        $film = Film::with('comments', 'state')->where('slug', $slug)->firstOrFail();;

        $film->state->increment('vviews');
        return new FilmResource($film);
    }

    public function likesIncrement(Request $request) {

        $slug = $request->get('slug');
        $film = Film::with('comments', 'state')->where('slug', $slug)->firstOrFail();;

        $inc = $request->get('increment');
        $inc ? $film->state->increment('likes') : $film->state->decrement('likes');
        return new FilmResource($film);
    }
}
