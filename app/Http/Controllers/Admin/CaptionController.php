<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TitleRequest;
use App\Models\Caption;
use Illuminate\Http\Request;

class CaptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $captions = Caption::paginate(20);
        return view('admin.captions.index', compact('captions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.captions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TitleRequest $request)
    {
        Caption::create($request->all());
        return redirect()->route('captions.index')->with('success', 'Тег добавлен');
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
        $caption = Caption::find($id);
        return view('admin.captions.edit', compact('caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TitleRequest $request, string $id)
    {
        $caption = Caption::find($id);
        $caption->update($request->all());
        return redirect()->route('captions.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $caption = Caption::find($id);                                                                              //16
        if ($caption->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('captions.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $caption->delete();                                                                                      //16
        return redirect()->route('captions.index')->with('success', 'Тег удален');
    }
}
