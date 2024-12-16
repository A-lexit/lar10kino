<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\TitleRequest;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $seasons = Season::paginate(20);
        //dd($seasons);        // 6 урок //після перезавантаження сторінки буде показані дані, що передаються. Повинна спрацювати умова if !no empty, але вона не спрацює. тому в blade потрібно змінити на count
        return view('admin.seasons.index', compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.seasons.create');    //повертаємо вид, де у нас буде формочка для додавання категорій
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TitleRequest $request)
    {
        Season::create($request->all());
//        $request->session()->flash('success', 'Категория добавлена');
        return redirect()->route('seasons.index')->with('success', 'Категория добавлена');
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
        $season = Season::find($id);                                                   //7//знаходимо категорю і зберігаємо її
        //$season->slug = null;                                                 //7//Якщо потрібно оновлювати також slug
        //  $season->update($request->all());    //потрібно закоментувати, бо інакше помилка, хоча все наче проацює ок //7//Оновлюємо категорію, передаючи їй провалідований реквест
        return view('admin.seasons.edit', compact('season'));  //7// робимо редірект на сторінку початкову сторінку категорій
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
        $season = Season::find($id);
//        $season->slug = null;
        $season->update($request->all());
        return redirect()->route('seasons.index')->with('success', 'Изменения сохранены');
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
        //season::destroy(id);               //7//Видалення категорії однією строчкою коду замість $season = season::find($id); та $season->delete();
        $season = Season::find($id);         //7//Знаходимо категорію
        //dd(($season->posts->count()));                                                                  //16     перевірка на к-сть постів в категорії (при намаганні видалити категорію)

        if ($season->films->count()) {                                                                             //16//Якщо категорія має хоча б один пост
            return redirect()->route('seasons.index')->with('error', 'Ошибка! У категории есть записи');
        }
        $season->delete();                     //7//Видаляємо категорію
        return redirect()->route('seasons.index')->with('success', 'Категория удалена');        //7//Робимо редірект на головну категорій
    }
}
