<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\TitleRequest;
use App\Models\Duration;
use Illuminate\Http\Request;

class DurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $durations = Duration::paginate(20);
        //dd($durations);        // 6 урок //після перезавантаження сторінки буде показані дані, що передаються. Повинна спрацювати умова if !no empty, але вона не спрацює. тому в blade потрібно змінити на count
        return view('admin.durations.index', compact('durations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.durations.create');    //повертаємо вид, де у нас буде формочка для додавання категорій
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TitleRequest $request)
    {
        Duration::create($request->all());
//        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('durations.index')->with('success', 'Категория добавлена');
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
        $duration = Duration::find($id);                                                   //7//знаходимо категорю і зберігаємо її
        //$duration->slug = null;                                                 //7//Якщо потрібно оновлювати також slug
        //  $duration->update($request->all());    //потрібно закоментувати, бо інакше помилка, хоча все наче проацює ок //7//Оновлюємо категорію, передаючи їй провалідований реквест
        return view('admin.durations.edit', compact('duration'));  //7// робимо редірект на сторінку початкову сторінку категорій
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
        $duration = Duration::find($id);
//        $duration->slug = null;
        $duration->update($request->all());
        return redirect()->route('durations.index')->with('success', 'Изменения сохранены');
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
        //duration::destroy(id);               //7//Видалення категорії однією строчкою коду замість $duration = duration::find($id); та $duration->delete();
        $duration = Duration::find($id);         //7//Знаходимо категорію
        //dd(($duration->posts->count()));                                                                  //16     перевірка на к-сть постів в категорії (при намаганні видалити категорію)

        if ($duration->films->count()) {                                                                             //16//Якщо категорія має хоча б один пост
            return redirect()->route('durations.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $duration->delete();                     //7//Видаляємо категорію
        return redirect()->route('durations.index')->with('success', 'Категория удалена');        //7//Робимо редірект на головну категорій
    }
}
