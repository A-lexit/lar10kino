<?php

namespace App\Models;

/*use Carbon\Carbon;*/

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
const FILMSS_ID = 1;
const SERIALSS_ID = 2;
const MULTSS_ID = 3;
const MULTSERIALSS_ID = 4;

const HOURR = 60;

const IS_DRAFT = 0;
const IS_PUBLIC = 1;

class Film extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['note', 'subject', 'body', 'likes', 'vviews', 'view', 'tag', 'season_id', 'quality_id', 'title', 'slug', 'origin_title', 'description', 'category_id', 'thumbnail', 'director_id', 'year_id', 'company_id', 'duration', 'other_actor', 'rating_id', 'composer_id', 'status_id', 'age_id', 'watch_id', 'duration_id', 'author_id', 'user_id', 'status', 'date'];


    //Пов'язані таблиці
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
        /*return $this->belongsTo(User::class, 'author_id');*/        //Більш короткий варіант
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function duration()
    {
        return $this->hasOne(Duration::class);
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Sluggable
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
////////////////////////////////////////////////////////////////////////
    //Пагінація фільмів головної сторінки та сторінки фільми(Дивитись ще)
    /*public function scopeAllFilmsPag($query, $numbers)
    {
        return $query->with('category', 'state')->orderBy('created_at', 'desc')->paginate($numbers);
    }*/
////////////////////////////////////////////////////////////////////////////////////


// Головна сторінка

    public function scopeHomeFilms($query, $filmcat, $number)
    {
        return $query->where('category_id', $filmcat)->with('category')->orderBy('created_at', 'desc')->paginate($number);  //orderBy('id', 'desc')
    }


// Дивитись ще (фільми, серіали, мульти, мультсеріали)    Статистичний варіант до цього: if($this->category_id === 1)where('category_id', 1) esdeif($this->category_id === 2)where('category_id', 2)
    public function moreFilmsLimit()
    {
        if ($this->category_id)
            return Film::where('slug', '!=', $this->slug)->where('category_id', $this->category_id)->with('category')->inRandomOrder()->limit(5)->get();  //orderBy('id', 'desc')
    }
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


    //Пагінація фільмів сторінки категорії (контролер категорій)
    public function scopePagFilm($query, $number)
    {
        return $query->orderBy('created_at', 'desc')->paginate($number);
    }
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


    /*public function getBodyPreview(){
        return Str::limit($this->body, 100);

    }*/

    /*public function getBodyPreview(){
        return Str::chopEnd(($this->directors()->name  ',', ',');

    }*/

    /*public static function formattedItems($items)
    {
        return implode(', ', $items);
    }*/


    //Перший фільм
    public function scopeFirstFilm($query, $slug)
    {

        return $query->with('user')->where('slug', $slug)->firstOrFail();  //orderBy('id', 'desc')
    }

    //5 кращих фільмів за переглядами в сайдбарі
    /*public function scopeFilmOfWiews($query, $numbers)
    {
        return $query->where('view', '>', '0')->where('category_id', '3')->with('category')->orderBy('view', 'desc')->limit($numbers)->get();  //orderBy('id', 'desc')
    }*/
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


    //5 кращих фільмів за Лайками в сайдбарі (1фільми, 2серіали, 3мульти, 4мультсеріали)   Статистичний варіант до цього: if($this->category_id === 1)where('category_id', 1) esdeif($this->category_id === 2)where('category_id', 2)
    public function getSideBestFilms()
    {
        if ($this->category_id)
            return Film::join('states', function ($j) {
                $j->on('films.id', '=', 'states.film_id');
            })->with('category', 'state')->where('likes', '>', 0)->where('category_id', $this->category_id)->orderBy('likes', 'desc')->limit(5)->get();
    }
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////


    public static function getSideFearuredFilms()
    {

        return Film::where('is_featured', 1)->orderBy('updated_at', 'desc')->limit(5)->get();
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
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


    //Пошук
    /*	public function scopeLike($query, $s)                                                                       //22// Альтеранативний запис для пошуку чеоех scope
        {
            return $query->where('title', 'LIKE', "%{$s}%");
        }*/
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


//ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ ДАТИ

    //Дата для людей - 8 laravel (вбудований в ларавел)  - НЕ ПОТРЕБУЄ Carbon
    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
//        return $this->published_at->diffForHumans();
    }

    //Дата для людей (Carbon) працює, але наче без рос/укр мови
    public function getFilmDataCarbon()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }


    //Дата для людей (IntlDateFormatter) - Якщо потртрібна рос. мова - ru_RU
    public function getFilmData()
    {
        $formatter = new \IntlDateFormatter('uk_UK', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');

        return $formatter->format(new \DateTime($this->created_at));
    }
//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


//  Тривалість в годинах та хвилинах
    public function getDurationHours()
    {
        $this->duration_idh = intval($this->duration_id / HOURR);
        return $this->duration_idh;
    }

    public function getDurationMinutes()
    {
        $filmdurcomma = $this->duration_id / 60;
        $filmduri = intval($this->duration_id / 60);
        $this->duration_idm = ($filmdurcomma - $filmduri) * 60;
        return $this->duration_idm;
    }

//////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////


//Чернетка чи публікація

    public function setDraft()
    {
        $this->statuss = IS_DRAFT;
        $this->save();
    }

    public function setPublic()
    {
        $this->statuss = IS_PUBLIC;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if ($value == null) {
            return $this->setDraft();
        }

        return $this->setPublic();
    }
//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////


//----------------Обрані фільми в сайдбар-------------//

    public function setFeatured()
    {
        $this->is_featured = 1;
        $this->save();
    }

    public function setStandart()
    {
        $this->is_featured = 0;
        $this->save();
    }

    public function toggleFeatured($value)
    {
        if ($value == null) {
            return $this->setStandart();
        }

        return $this->setFeatured();
    }


    /*public function setDateAttribute($value) {
        //Залишаємо пустим і буде не дуже гарне відображення дати в адмінці в датапікері формату 2014/11/26

        $date = Carbon::createFromFormat('MM/DD/YYYY', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;

    }*/

    /*public function setDateAttribute($value) {
        $cleanedValue = trim($value);
        if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $cleanedValue)) {
            try {
            $date = Carbon::createFromFormat('d/m/Y', $cleanedValue)->format('Y-m-d'); dd($date);
            } catch (\Exception $e) {
                dd("Помилка форматування дати: " . $e->getMessage());
            }
        } else {
            dd("Невірний формат дати: " . $cleanedValue); }
    }*/


    public function setDateAttribute($value)
    {
        $cleanedValue = trim($value);

        if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $cleanedValue)) {
            try {
                $date = Carbon::createFromFormat('d/m/Y', $cleanedValue)->format('Y-m-d');
                $this->attributes['date'] = $date;
            } catch (\Exception $e) {
                // Обробка помилки форматування
            }
        } else {
            // Обробка невірного формату дати
        }
    }

    public function getDateAttribute($value)
    {
        if (!$date = Null){
        $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');

        return $date;

    }
    }




}
