<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TitleRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genres = Genre::paginate(20);
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TitleRequest $request)
    {
        Genre::create($request->all());
        return redirect()->route('genres.index')->with('success', 'Тег добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genre = Genre::find($id);
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TitleRequest $request, string $id)
    {
        $genre = Genre::find($id);
        $genre->update($request->all());
        return redirect()->route('genres.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $genre = Genre::find($id);                                                                              //16
        if ($genre->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('genres.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $genre->delete();                                                                                      //16
        return redirect()->route('genres.index')->with('success', 'Тег удален');
    }
}
