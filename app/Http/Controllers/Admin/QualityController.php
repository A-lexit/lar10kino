<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TitleRequest;
use App\Models\Quality;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $qualities = Quality::paginate(20);
        //dd($qualities);        // 6 урок //після перезавантаження сторінки буде показані дані, що передаються. Повинна спрацювати умова if !no empty, але вона не спрацює. тому в blade потрібно змінити на count
        return view('admin.qualities.index', compact('qualities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.qualities.create');    //повертаємо вид, де у нас буде формочка для додавання категорій
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TitleRequest $request)
    {
        Quality::create($request->all());
//        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('qualities.index')->with('success', 'Категория добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //dd(__METHOD__);  // 6 урок //виведем назву методу, щоб пересвідчитися, що ми потрапляємо сюди при редагування
        $quality = Quality::find($id);                                                   //7//знаходимо категорю і зберігаємо її
        //$quality->slug = null;                                                 //7//Якщо потрібно оновлювати також slug
        //  $quality->update($request->all());    //потрібно закоментувати, бо інакше помилка, хоча все наче проацює ок //7//Оновлюємо категорію, передаючи їй провалідований реквест
        return view('admin.qualities.edit', compact('quality'));  //7// робимо редірект на сторінку початкову сторінку категорій
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TitleRequest $request, $id)
    {
        $quality = Quality::find($id);
//        $quality->slug = null;
        $quality->update($request->all());
        return redirect()->route('qualities.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //6 урок // dd(__METHOD__);  //виведем назву методу, щоб пересвідчитися, що ми потрапляємо сюди при видаленні категорії
        //Quality::destroy(id);               //7//Видалення категорії однією строчкою коду замість $quality = Quality::find($id); та $quality->delete();
        $quality = Quality::find($id);         //7//Знаходимо категорію
        //dd(($quality->posts->count()));                                                                  //16     перевірка на к-сть постів в категорії (при намаганні видалити категорію)

        if ($quality->films->count()) {                                                                             //16//Якщо категорія має хоча б один пост
            return redirect()->route('qualities.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $quality->delete();                     //7//Видаляємо категорію
        return redirect()->route('qualities.index')->with('success', 'Категория удалена');        //7//Робимо редірект на головну категорій
    }
}
