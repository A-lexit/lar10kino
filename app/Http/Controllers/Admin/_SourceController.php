<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sources = Source::paginate(20);
        return view('admin.sources.index', compact('sources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.sources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
        ]);
        Source::create($request->all());
        return redirect()->route('sources.index')->with('success', 'Тег добавлен');
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
        $source = Source::find($id);
        return view('admin.sources.edit', compact('source'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
        ]);
        $source = Source::find($id);
        $source->update($request->all());
        return redirect()->route('sources.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $source = Source::find($id);                                                                              //16
        if ($source->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('sources.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $source->delete();                                                                                      //16
        return redirect()->route('sources.index')->with('success', 'Тег удален');
    }
}
