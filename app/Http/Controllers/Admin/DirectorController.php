<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NameRequest;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $directors = Director::paginate(20);
        return view('admin.directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NameRequest $request)
    {
        Director::create($request->all());
        return redirect()->route('directors.index')->with('success', 'Тег добавлен');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $director = Director::find($id);
        return view('admin.directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NameRequest $request, string $id)
    {
        $director = Director::find($id);
        $director->update($request->all());
        return redirect()->route('directors.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $director = Director::find($id);                                                                              //16
        if ($director->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('directors.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $director->delete();                                                                                      //16
        return redirect()->route('directors.index')->with('success', 'Тег удален');
    }
}
