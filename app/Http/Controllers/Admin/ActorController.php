<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NameRequest;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $actors = Actor::paginate(20);
        return view('admin.actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NameRequest $request)
    {
        Actor::create($request->all());
        return redirect()->route('actors.index')->with('success', 'Тег добавлен');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $actor = Actor::find($id);
        return view('admin.actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NameRequest $request, string $id)
    {
        $actor = Actor::find($id);
        $actor->update($request->all());
        return redirect()->route('actors.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $actor = Actor::find($id);                                                                              //16
        if ($actor->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('actors.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $actor->delete();                                                                                      //16
        return redirect()->route('actors.index')->with('success', 'Тег удален');
    }
}
