<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilmRequest;
use App\Models\Actor;
use App\Models\Age;
use App\Models\Caption;
use App\Models\Category;
use App\Models\Company;
use App\Models\Composer;
use App\Models\Country;
use App\Models\Director;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Producer;
use App\Models\Quality;
use App\Models\Rating;
use App\Models\Season;
use App\Models\Selection;
use App\Models\Status;
use App\Models\Year;
use App\Models\Duration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::with(  'category', 'actors', 'user')->paginate(3);

        /*$films = Film::where('author_id', $request->id)->with(  'category', 'actors', 'user')->paginate(3);*/


        return view('admin.films.index', compact('films'));
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
        $durations = Duration::pluck('title', 'id')->all();
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

        return view('admin.films.create', compact('categories', 'directors', 'years', 'actors', 'producers', 'genres', 'languages', 'countries', 'companies', 'captions', 'selections', 'ratings', 'composers', 'statuses', 'ages', 'qualities', 'seasons', 'durations'));             //передаємо все це в види

    }

    /**
     * Store a newly created resource in storage.
     */





    public function store(FilmRequest $request)
    {
        //
        $data = $request->all();

        //dd($request->all());

        $data['thumbnail'] = Film::uploadImage($request);      //11//

        $film = Film::create($data);                 //10// передаємо модель, яка прийняла дані data в нову змінну post. Це робиться, щоб зберегти потім теги    //раніше робили Post::create($request->all);


        $film->companies()->sync($request->companies);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->composers()->sync($request->composers);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->directors()->sync($request->directors);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->actors()->sync($request->actors);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->producers()->sync($request->producers);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->genres()->sync($request->genres);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->languages()->sync($request->languages);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->countries()->sync($request->countries);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->captions()->sync($request->captions);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        $film->selections()->sync($request->selections);         //10// передаємо в метод sync масив тегів, що зберігається в $request->tags
        /*$film->sources()->sync($request->sources); */        //10// передаємо в метод sync масив тегів, що зберігається в $request->tags






        return redirect()->route('films.index')->with('success', 'Статья добавлена');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $film = Film::find($id);                //11//отримуємо пост по id
        $categories = Category::pluck('title', 'id')->all();

        $years = Year::pluck('title', 'id')->all();
        $ratings = Rating::pluck('title', 'id')->all();
        $durations = Duration::pluck('title', 'id')->all();
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




        return view('admin.films.edit', compact('categories', 'directors', 'years', 'actors', 'producers', 'genres', 'languages', 'film', 'countries', 'companies', 'captions', 'selections', 'ratings', 'composers', 'statuses', 'ages', 'qualities', 'seasons', 'durations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, string $id)
    {
        //
        $film = Film::find($id);                 //11//отримуємо пост по id
        $data = $request->all();

        if ($file = Film::uploadImage($request, $film->thumbnail)) {                                                                    //16// повернемо або назву файлу або null. Якщо умова не виконається
            $data['thumbnail'] = $file;                              //16// якщо картинка є, то ми запишемо її прямолінійно в файл. Але якщо ні а data не з'явиться thumbnail і  ми не перезапишемо файл нулом. Тобто замкнене коло
        }
        //dd($data);                                                                                                                     //16//
        $film->update($data);                        //11//оновлюємо пост
        $film->directors()->sync($request->directors);
        $film->composers()->sync($request->composers);
        $film->companies()->sync($request->companies);
        $film->actors()->sync($request->actors);
        $film->producers()->sync($request->producers);
        $film->genres()->sync($request->genres);
        $film->languages()->sync($request->languages);
        $film->countries()->sync($request->countries);
        $film->captions()->sync($request->captions);
        $film->selections()->sync($request->selections);
        /*$film->sources()->sync($request->sources);*/

        return redirect()->route('films.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $film = Film::find($id);              //11//
        $film->companies()->sync([]);              //11//
        $film->directors()->sync([]);              //11//
        $film->composers()->sync([]);              //11//
        $film->actors()->sync([]);              //11//
        $film->producers()->sync([]);              //11//
        $film->genres()->sync([]);              //11//
        $film->languages()->sync([]);              //11//
        $film->countries()->sync([]);              //11//
        $film->captions()->sync([]);              //11//
        $film->selections()->sync([]);              //11//
        /*$film->sources()->sync([]);  */            //11//







        Storage::delete($film->thumbnail);    //11//
        $film->delete();                      //11//
        return redirect()->route('films.index')->with('success', 'Статья удалена');
    }
}
