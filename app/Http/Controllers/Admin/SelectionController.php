<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TitleRequest;
use App\Models\Selection;
use Illuminate\Http\Request;

class SelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $selections = Selection::paginate(20);
        return view('admin.selections.index', compact('selections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.selections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TitleRequest $request)
    {
        Selection::create($request->all());
        return redirect()->route('selections.index')->with('success', 'Тег добавлен');
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
        $selection = Selection::find($id);
        return view('admin.selections.edit', compact('selection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TitleRequest $request, string $id)
    {
        $selection = Selection::find($id);
        $selection->update($request->all());
        return redirect()->route('selections.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $selection = Selection::find($id);                                                                              //16
        if ($selection->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('selections.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $selection->delete();                                                                                      //16
        return redirect()->route('selections.index')->with('success', 'Тег удален');
    }
}
