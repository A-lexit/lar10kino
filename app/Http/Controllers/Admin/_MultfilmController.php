<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Age;
use App\Models\Caption;
use App\Models\Category;
use App\Models\Company;
use App\Models\Composer;
use App\Models\Country;
use App\Models\Director;
use App\Models\Multfilm;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Producer;
use App\Models\Quality;
use App\Models\Rating;
use App\Models\Season;
use App\Models\Selection;
use App\Models\Status;
use App\Models\Year;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultfilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multfilms = Multfilm::with('category', 'actors')->paginate(300 );

        return view('admin.multfilms.index', compact('multfilms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::pluck('title', 'id')->all();     //title - значення, id - ключ      //Отримуємо категорії, але нам потрібні не всі дані, а тільки масив, при цьому в масиві повині бути тайтл і id(для того щоб у нас був номер категорії. Саме він нам потрібен, він потрапляє в категорії id посту моделі Post, а тайтл - для того, щоб користувач бачив назву категорії і міг її вибрати, а id категорії полетить в реквесті в наш контроллер

        $years = Year::pluck('title', 'id')->all();
        $ratings = Rating::pluck('title', 'id')->all();
        /*$durations = Duration::pluck('title', 'id')->all();*/
        $statuses = Status::pluck('title', 'id')->all();
        $ages = Age::pluck('title', 'id')->all();
        $qualities = Quality::pluck('title', 'id')->all();
        $seasons = Season::pluck('title', 'id')->all();


        $composers = Composer::pluck('name', 'id')->all();
        $companies = Company::pluck('title', 'id')->all();
        $directors = Director::pluck('name', 'id')->all();
        $actors = Actor::pluck('name', 'id')->all();
        $producers = Producer::pluck('name', 'id')->all();
        $genres = Genre::pluck('title', 'id')->all();
        $languages = Language::pluck('title', 'id')->all();
        $countries = Country::pluck('title', 'id')->all();
        $captions = Caption::pluck('title', 'id')->all();
        $selections = Selection::pluck('title', 'id')->all();
        /*$sources = Source::pluck('title', 'id')->all();*/

        return view('admin.multfilms.create', compact('categories', 'directors', 'years', 'actors', 'producers', 'genres', 'languages', 'countries', 'companies', 'captions', 'selections', 'ratings', 'composers', 'statuses', 'ages', 'qualities', 'seasons'));             //передаємо все це в види

    }

    /**
     * Store a newly created resource in storage.
     */





    public function store(Request $request)
    {
        //
        $data = $request->all();

        //dd($request->all());

        $data['thumbnail'] = Multfilm::uploadImage($request);      //11//

        $multfilm = Multfilm::create($data);                 //10// передаємо модель, яка прийняла дані data в нову змінну post. Це робиться, щоб зберегти потім теги    //раніше робили Post::create($request->all);


        $multfilm->companies()->sync($request->companies);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->composers()->sync($request->composers);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->directors()->sync($request->directors);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->actors()->sync($request->actors);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->producers()->sync($request->producers);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->genres()->sync($request->genres);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->languages()->sync($request->languages);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->countries()->sync($request->countries);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->captions()->sync($request->captions);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $multfilm->selections()->sync($request->selections);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        /*$multfilm->sources()->sync($request->sources); */        //10// передаємо в метод sync масив тегів, що зберігається в $request->tags






        return redirect()->route('multfilms.index')->with('success', 'Статья добавлена');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $multfilm = Multfilm::find($id);                //11//отримуємо пост по id
        $categories = Category::pluck('title', 'id')->all();

        $years = Year::pluck('title', 'id')->all();
        $ratings = Rating::pluck('title', 'id')->all();
        /*$durations = Duration::pluck('title', 'id')->all();*/
        $statuses = Status::pluck('title', 'id')->all();
        $ages = Age::pluck('title', 'id')->all();
        $qualities = Quality::pluck('title', 'id')->all();
        $seasons = Season::pluck('title', 'id')->all();

        $composers = Composer::pluck('name', 'id')->all();
        $companies = Company::pluck('title', 'id')->all();
        $directors = Director::pluck('name', 'id')->all();
        $actors = Actor::pluck('name', 'id')->all();
        $producers = Producer::pluck('name', 'id')->all();
        $genres = Genre::pluck('title', 'id')->all();
        $languages = Language::pluck('title', 'id')->all();
        $countries = Country::pluck('title', 'id')->all();
        $captions = Caption::pluck('title', 'id')->all();
        $selections = Selection::pluck('title', 'id')->all();
        /*$sources = Source::pluck('title', 'id')->all();*/




        return view('admin.multfilms.edit', compact('categories', 'directors', 'years', 'actors', 'producers', 'genres', 'languages', 'film', 'countries', 'companies', 'captions', 'selections', 'ratings', 'composers', 'statuses', 'ages', 'qualities', 'seasons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $multfilm = Multfilm::find($id);                 //11//отримуємо пост по id
        $data = $request->all();

        if ($file = Multfilm::uploadImage($request, $multfilm->thumbnail)) {                                                                    //16// повернемо або назву файлу або null. Якщо умова не виконається
            $data['thumbnail'] = $file;                              //16// якщо картинка є, то ми запишемо її прямолінійно в файл. Але якщо ні а data не з'явиться thumbnail і  ми не перезапишемо файл нулом. Тобто замкнене коло
        }
        //dd($data);                                                                                                                     //16//
        $multfilm->update($data);                        //11//оновлюємо пост
        $multfilm->directors()->sync($request->directors);
        $multfilm->composers()->sync($request->composers);
        $multfilm->companies()->sync($request->companies);
        $multfilm->actors()->sync($request->actors);
        $multfilm->producers()->sync($request->producers);
        $multfilm->genres()->sync($request->genres);
        $multfilm->languages()->sync($request->languages);
        $multfilm->countries()->sync($request->countries);
        $multfilm->captions()->sync($request->captions);
        $multfilm->selections()->sync($request->selections);
        /*$multfilm->sources()->sync($request->sources);*/

        return redirect()->route('multfilms.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $multfilm = Multfilm::find($id);              //11//
        $multfilm->companies()->sync([]);              //11//
        $multfilm->directors()->sync([]);              //11//
        $multfilm->composers()->sync([]);              //11//
        $multfilm->actors()->sync([]);              //11//
        $multfilm->producers()->sync([]);              //11//
        $multfilm->genres()->sync([]);              //11//
        $multfilm->languages()->sync([]);              //11//
        $multfilm->countries()->sync([]);              //11//
        $multfilm->captions()->sync([]);              //11//
        $multfilm->selections()->sync([]);              //11//
        /*$multfilm->sources()->sync([]);  */            //11//







        Storage::delete($multfilm->thumbnail);    //11//
        $multfilm->delete();                      //11//
        return redirect()->route('multfilms.index')->with('success', 'Статья удалена');
    }
}
