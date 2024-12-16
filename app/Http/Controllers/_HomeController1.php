<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use App\Models\Film;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use const App\Models\FILMSS_ID;
use const App\Models\HOURR;
use const App\Models\MULTSERIALSS_ID;
use const App\Models\MULTSS_ID;
use const App\Models\SERIALSS_ID;


class HomeController extends Controller
{
    public function index() {

        /*$category = DB::table('categories')->limit(4)
        $films = $category->where('title', 'Серіали')->get()->limit(4);*/

        /*$category = Category::where('id', '1')->all();
        $films = Film::all();*/
        /*dd($films);*/

        /*dd($category);*/
        /*$films = category()->orderBy('created_at', 'desc')->paginate(5);
        dd($films);*/
        /*$category = Category::where('id', '2')->get();
        $films->category()->find(2);


        /*dd($category);*/
        /* $films = Film::has('id' = 2)->with('category')->orderBy('created_at', 'desc')->limit(4)->get();
         $films = Film::with('category')->take(10);*/
        /*dd($films);*/
        /*$serials = Film::lastLimit(3);
        $multyky = Film::lastLimit(3);*/




        /*$categories = Category::all();

        $films = Film::all();
        $films = categories()->limit(6)->get();


        dd($films);*/



        $films = Film::homeFilms(FILMSS_ID, 10);
        $serials = Film::homeFilms(SERIALSS_ID, 10);
        $mults = Film::homeFilms(MULTSS_ID, 10);
        $multserials = Film::homeFilms(MULTSERIALSS_ID, 10);

        return view('index', compact('films', 'serials', 'mults', 'multserials'));
    }




    public function show($category, $slug) {

            /*$film = Film::where(['slug' => $slug,])->with('category')->first();*/

        /*$filmfilm = DB::table('films')
            ->select('films.id', 'films.title as films_title', 'categories.id', 'categories.title')
            ->limit(10)->join('categories', 'films.category_id', '=', 'categories.id')
            ->where('categories.title', 'Фільми')
            ->get();
        dd($filmfilm);*/


        $film = Film::firstFilm($slug);





        /*$filmdurcomma = $film->duration_id / 60;
        $filmdurr = round($film->duration_id / 60);    // 2,8=3
        $filmduri = intval($film->duration_id / 60);  //  2,8=2       //год
        $filmdurmunut = ($filmdurcomma - $filmduri)*HOURR;                  // хв*/












        /*if($film->category->id === FILMSS_ID)
            //if($film->category->id === FILMSS_ID)
            $sidefilms = Film::sideBestFilmsLimit(5);

        //elseif($film->category->id === 2)
        elseif($film->category->id === SERIALSS_ID)
            $sidefilms = Film::sideBestSerialsLimit(5);
        //elseif($film->category->id === 3)
        elseif($film->category->id === MULTSS_ID)
            $sidefilms = Film::sideBestMultsLimit(7);
       // elseif($film->category->id === 4)
        elseif($film->category->id === MULTSERIALSS_ID)
            $sidefilms = Film::sideBestMultserialsLimit(10);*/








        /*$filmdur = intval(60.36);*/


       /* $filmdurrr = round($filmdur, -2);*/



            /*$film->view += 1;
            $film->update();*/
/*dd($film);*/


        // Сохранить пользователя



/*$bestactor = Film::where('quality_id', '2')->select('title')->limit(5)->get();*/
        /*$bestactor = DB::table('films')
            ->select('films.id', 'films.title', 'states.id', 'states.likes')
            ->limit(5)->join('states', 'films.id', '=', 'states.film_id')
            ->where('states.likes', '>', '1')
        ->get();
dd($bestactor);*/
        /*$sidefilms = DB::table('films')
            ->select('films.id', 'films.title as films_title', 'categories.id', 'categories.title')
            ->limit(10)->join('categories', 'films.category_id', '=', 'categories.id')
            ->where('categories.title', 'Фільми')
            ->get();*/
        /*$sidefilms = Film::filmOfWiews(5);*/
        /*$sidefilms = Film::filmOfLikes(5);*/
/*dd($sidefilms);*/

















        /*$category = Category::all();*/
        /*$sidefilms = Film::where('view', '>', '0')->with('category')->orderBy('view', 'desc')->paginate(5);*/








       /* if($film->category->id === 1)*/

      /*  elseif($film->category->title === 'Мультики')
        $mults = Film::lastLimit4(5);
        elseif($film->category->title === 'Мультсеріали')
        $multserials = Film::lastLimit3(5);*/

        /*dd( $multserials);*/
        /*$comments = DB::table('comments')->firsOrFail();*/
       /* $comments = DB::table('comments')->get();*/


        /*dd($comments);*/

        /*$comments = Comment::all();
        $films = $comments->film();*/


      /*  $comments=Comment::all();
        $film->$comments;*/

/*dd($film);*/

        return view('films.show', compact('film'));
    }

}
