<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NameRequest;
use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $producers = Producer::paginate(20);
        return view('admin.producers.index', compact('producers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.producers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NameRequest $request)
    {
        Producer::create($request->all());
        return redirect()->route('producers.index')->with('success', 'Тег добавлен');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $producer = Producer::find($id);
        return view('admin.producers.edit', compact('producer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NameRequest $request, string $id)
    {
        $producer = Producer::find($id);
        $producer->update($request->all());
        return redirect()->route('producers.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producer = Producer::find($id);                                                                              //16
        if ($producer->films->count()) {                                                                         //16    Якщо є хоча б одни тег, то видавати помилку
            return redirect()->route('producers.index')->with('error', 'Ошибка! У тегов есть записи');
        }
        $producer->delete();                                                                                      //16
        return redirect()->route('producers.index')->with('success', 'Тег удален');
    }
}
