<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
const FILMSS_ID = 1;
const SERIALSS_ID = 2;
const MULTSS_ID = 3;
const MULTSERIALSS_ID = 4;

class Film extends Model
{



    use HasFactory;
    use HasSlug;

    protected $fillable = ['note', 'subject', 'body', 'likes', 'vviews', 'view', 'season_id','quality_id', 'title', 'slug', 'origin_title', 'description', 'category_id', 'thumbnail', 'director_id', 'year_id', 'company_id', 'duration', 'other_actor','rating_id', 'composer_id', 'status_id', 'age_id', 'watch_id'];

    //Пов'язані таблиці
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function state() {
        return $this->hasOne(State::class);
    }


    public function quality()
    {
        return $this->belongsTo(Quality::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*public function director()
    {
        return $this->belongsTo(Director::class);
    }*/

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    /*public function company()
    {
        return $this->belongsTo(Company::class);
    }*/

    /*public function duration()
    {
        return $this->belongsTo(Duration::class);
    }*/

    public function rating()
    {
        return $this->belongsTo(Rating::class);
    }

    /*public function composer()
    {
        return $this->belongsTo(Composer::class);
    }*/

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function age()
    {
        return $this->belongsTo(Age::class);
    }

    public function watch()
    {
        return $this->belongsTo(Watch::class);
    }


    public function directors()
    {
        return $this->belongsToMany(Director::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function composers()
    {
        return $this->belongsToMany(Composer::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function producers()
    {
        return $this->belongsToMany(Producer::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function captions()
    {
        return $this->belongsToMany(Caption::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    public function selections()
    {
        return $this->belongsToMany(Selection::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }

    /*public function sources()
    {
        return $this->belongsToMany(Source::class);                //10// ->withTimestamps()  щоб автоматично заповнювались дата створення і дата редагування
    }*/








    // Sluggable
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    //Пагінація фільмів головної сторінки та сторінки фільми(Дивитись ще)
    public function scopeAllFilmsPag($query, $numbers)
    {
        return $query->with('category', 'state')->orderBy('created_at', 'desc')->paginate($numbers);  //orderBy('id', 'desc')
    }

// Дивитись ще (фільми, серіали, мульти, мультсеріали)
    public function scopeLastLimit($query, $numbers)
    {
        return $query->where('category_id', FILMSS_ID)->with('category', 'state')->orderBy('created_at', 'desc')->inRandomOrder()->limit($numbers)->get();  //orderBy('id', 'desc')
    }

    public function scopeLastLimit2($query, $numbers)
    {
        return $query->where('category_id', SERIALSS_ID)->with('category', 'state')->orderBy('created_at', 'desc')->inRandomOrder()->limit($numbers)->get();  //orderBy('id', 'desc')
    }

    public function scopeLastLimit3($query, $numbers)
    {
        return $query->where('category_id', MULTSS_ID)->with('category', 'state')->orderBy('created_at', 'desc')->inRandomOrder()>limit($numbers)->get();  //orderBy('id', 'desc')
    }

    public function scopeLastLimit4($query, $numbers)
    {
        return $query->where('category_id', MULTSERIALSS_ID)->with('category', 'state')->orderBy('created_at', 'desc')->inRandomOrder()->limit($numbers)->get();  //orderBy('id', 'desc')
    }


    //Пагінація фільмів сторінки категорії
    public function scopePagFilm($query, $number)
    {
        return $query->orderBy('created_at', 'desc')->paginate($number);  //orderBy('id', 'desc')
    }

    //Перший фільм
    public function scopeFirstFilm($query, $slug)
    {
        return $query->where('slug', $slug)->with(['category'])->first();  //orderBy('id', 'desc')
    }

    //5 кращих фільмів за переглядами в сайдбарі
    /*public function scopeFilmOfWiews($query, $numbers)
    {
        return $query->where('view', '>', '0')->where('category_id', '3')->with('category')->orderBy('view', 'desc')->limit($numbers)->get();  //orderBy('id', 'desc')
    }*/




    //5 кращих фільмів за Лайками в сайдбарі (1фільми, 2серіали, 3мульти, 4мультсеріали)
    public function scopeSideBestFilms($query, $numbers)
    {
        return $query->join('states', function ($j) {
            /* @var JoinClause $j*/
            $j->on('films.id', '=', 'states.film_id');
        })->with('category', 'state')->where('likes', '>', 0)->where('category_id', 1)->orderBy('likes', 'desc')->limit($numbers)->get();  //orderBy('likes', 'desc')
    }

    public function scopeSideBestSerials($query, $numbers)
    {
        return $query->join('states', function ($j) {
            /* @var JoinClause $j*/
            $j->on('films.id', '=', 'states.film_id');
        })->with('category', 'state')->where('likes', '>', 0)->where('category_id', 2)->orderBy('likes', 'desc')->limit($numbers)->get();  //orderBy('likes', 'desc')
    }

    public function scopeSideBestMults($query, $numbers)
    {
        return $query->join('states', function ($j) {
            /* @var JoinClause $j*/
            $j->on('films.id', '=', 'states.film_id');
        })->with('category', 'state')->where('likes', '>', 0)->where('category_id', 3)->orderBy('likes', 'desc')->limit($numbers)->get();  //orderBy('likes', 'desc')
    }

    public function scopeSideBestMultserials($query, $numbers)
    {
        return $query->join('states', function ($j) {
            /* @var JoinClause $j*/
            $j->on('films.id', '=', 'states.film_id');
        })->with('category', 'state')->where('likes', '>', 0)->where('category_id', 4)->orderBy('likes', 'desc')->limit($numbers)->get();  //orderBy('likes', 'desc')
    }























    //Картинки
    public static function uploadImage(Request $request, $image = null)              //11//$image = null - за замовчуванням     //My name //статичний метод, який приймоє об'єкт Request  //передаємо картинку для видалення
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {                                                            //11//Якщо картинка є, то ми її видалимо
                Storage::delete($image);                                             //11//Видаляємо картикнку
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");     //11//зберігаємо і повертаємо шлях до збереженого файлу
        }
        return null;
    }

    public function getImage()                                                        //11//метод для отримання вже картинки, а не шляху
    {
        if (!$this->thumbnail) {                                                     //11//якщо прикріпленої картинки немає,то показуємо значок заглушку no-image
            return asset("no-image.png");                                       //11//asset - ф-ція хелер
        }
        return asset("uploads/{$this->thumbnail}");                             //11//якщо ж картинка прикріплена, то ми її мініатюру показуємо в адмінці
    }



    //Пщшук
	public function scopeLike($query, $s)                                                                       //22// Альтеранативний запис для пошуку чеоех scope
    {
        return $query->where('title', 'LIKE', "%{$s}%");
    }

    //Дата для людей
    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();
//        return $this->published_at->diffForHumans();
    }





}
