<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\TitleRequest;
use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $years = Year::paginate(20);
        //dd($years);        // 6 урок //після перезавантаження сторінки буде показані дані, що передаються. Повинна спрацювати умова if !no empty, але вона не спрацює. тому в blade потрібно змінити на count
        return view('admin.years.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.years.create');    //повертаємо вид, де у нас буде формочка для додавання категорій
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TitleRequest $request)
    {
        Year::create($request->all());
//        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('years.index')->with('success', 'Категория добавлена');
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
        $year = Year::find($id);                                                   //7//знаходимо категорю і зберігаємо її
        //$year->slug = null;                                                 //7//Якщо потрібно оновлювати також slug
        //  $year->update($request->all());    //потрібно закоментувати, бо інакше помилка, хоча все наче проацює ок //7//Оновлюємо категорію, передаючи їй провалідований реквест
        return view('admin.years.edit', compact('year'));  //7// робимо редірект на сторінку початкову сторінку категорій
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
        $request->validate([
            'title' => 'required',
        ]);
        $year = Year::find($id);
//        $year->slug = null;
        $year->update($request->all());
        return redirect()->route('years.index')->with('success', 'Изменения сохранены');
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
        //year::destroy(id);               //7//Видалення категорії однією строчкою коду замість $year = year::find($id); та $year->delete();
        $year = Year::find($id);         //7//Знаходимо категорію
        //dd(($year->posts->count()));                                                                  //16     перевірка на к-сть постів в категорії (при намаганні видалити категорію)

        if ($year->films->count()) {                                                                             //16//Якщо категорія має хоча б один пост
            return redirect()->route('years.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $year->delete();                     //7//Видаляємо категорію
        return redirect()->route('years.index')->with('success', 'Категория удалена');        //7//Робимо редірект на головну категорій
    }
}
