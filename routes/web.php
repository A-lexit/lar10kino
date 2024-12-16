<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\DraftOrPublicPost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('test');
});*/

Route::get('/', [App\Http\Controllers\FilmController::class, 'index'])->name('homee');                                            //15// ... Змінюємо колбеу ф-цію на Контроллер
//Route::get('/article', [HomeController::class, 'show'])->name('single');                       //15//

Route::get('/send', [App\Http\Controllers\ContactController::class, 'send']);

Route::get('/comment', [App\Http\Controllers\CommentController::class, 'index']);

Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.single');   /*БУЛО*/                    //17// Фронт
/*Route::get('/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.single');*/   /*СТАЛО*/                    //17// Фронт





Route::post('/subscribe', [App\Http\Controllers\SubsController::class, 'subscribe']);
Route::get('/verify/{token}', [App\Http\Controllers\SubsController::class, 'verify']);
/*Route::('/verify/{token}', 'SubsController@verify');*/


Route::resource('/admin/subscribers', App\Http\Controllers\Admin\SubscriberController::class);




Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');                           //22//
Route::get('/years', [App\Http\Controllers\YearController::class, 'index'])->name('years.all');                       //18// Фронт - пост
Route::get('/year/{slug}', [App\Http\Controllers\YearController::class, 'show'])->name('years.single');
Route::get('/ratings', [App\Http\Controllers\RatingController::class, 'index'])->name('ratings.all');                       //18// Фронт - пост
Route::get('/rating/{slug}', [App\Http\Controllers\RatingController::class, 'show'])->name('ratings.single');               //18// Фронт - пост
Route::get('/statuses', [App\Http\Controllers\StatusController::class, 'index'])->name('statuses.all');                       //18// Фронт - пост
Route::get('/status/{slug}', [App\Http\Controllers\StatusController::class, 'show'])->name('statuses.single');               //18// Фронт - пост
Route::get('/ages', [App\Http\Controllers\AgeController::class, 'index'])->name('ages.all');                       //18// Фронт - пост
Route::get('/age/{slug}', [App\Http\Controllers\AgeController::class, 'show'])->name('ages.single');               //18// Фронт - пост
Route::get('/qualities', [App\Http\Controllers\QualityController::class, 'index'])->name('qualities.all');                       //18// Фронт - пост
Route::get('/quality/{slug}', [App\Http\Controllers\QualityController::class, 'show'])->name('qualities.single');               //18// Фронт - пост
Route::get('/durations', [App\Http\Controllers\DurationController::class, 'index'])->name('durations.all');                       //18// Фронт - пост
Route::get('/duration/{slug}', [App\Http\Controllers\DurationController::class, 'show'])->name('durations.single');
Route::get('/seasons', [App\Http\Controllers\SeasonController::class, 'index'])->name('seasons.all');                       //18// Фронт - пост
Route::get('/season/{slug}', [App\Http\Controllers\SeasonController::class, 'show'])->name('seasons.single');


Route::get('/composers', [App\Http\Controllers\ComposerController::class, 'index'])->name('composers.all');                       //18// Фронт - пост
Route::get('/composer/{slug}', [App\Http\Controllers\ComposerController::class, 'show'])->name('composers.single');               //18// Фронт - пост
Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.all');                       //18// Фронт - пост
Route::get('/company/{slug}', [App\Http\Controllers\CompanyController::class, 'show'])->name('companies.single');               //18// Фронт - пост
Route::get('/director', [App\Http\Controllers\DirectorController::class, 'index'])->name('directors.all');//18// Фронт - пост
Route::get('/director/{slug}', [App\Http\Controllers\DirectorController::class, 'show'])->name('directors.single');                       //18// Фронт - пост
Route::get('/actors', [App\Http\Controllers\ActorController::class, 'index'])->name('actors.all');
Route::get('/actor/{slug}', [App\Http\Controllers\ActorController::class, 'show'])->name('actors.single');
Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries.all');
Route::get('/country/{slug}', [App\Http\Controllers\CountryController::class, 'show'])->name('countries.single');
Route::get('/genres', [App\Http\Controllers\GenreController::class, 'index'])->name('genres.all');
Route::get('/genre/{slug}', [App\Http\Controllers\GenreController::class, 'show'])->name('genres.single');                       //18// Фронт - пост
Route::get('/languages', [App\Http\Controllers\LanguageController::class, 'index'])->name('languages.all');
Route::get('/language/{slug}', [App\Http\Controllers\LanguageController::class, 'show'])->name('languages.single');                       //18// Фронт - пост
Route::get('/producers', [App\Http\Controllers\ProducerController::class, 'index'])->name('producers.all');
Route::get('/producer/{slug}', [App\Http\Controllers\ProducerController::class, 'show'])->name('producers.single');                       //18// Фронт - пост
Route::get('/captions', [App\Http\Controllers\CaptionController::class, 'index'])->name('captions.all');                       //18// Фронт - пост
Route::get('/caption/{slug}', [App\Http\Controllers\CaptionController::class, 'show'])->name('captions.single');
Route::get('/selections', [App\Http\Controllers\SelectionController::class, 'index'])->name('selections.all');                       //18// Фронт - пост
Route::get('/selection/{slug}', [App\Http\Controllers\SelectionController::class, 'show'])->name('selections.single');
/*Route::get('/sources', [App\Http\Controllers\SourceController::class, 'index'])->name('sources.all');                       //18// Фронт - пост
Route::get('/source/{slug}', [App\Http\Controllers\SourceController::class, 'show'])->name('sources.single');*/



Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->middleware('auth')->name('profile.update');




Route::group(['prefix' => 'admin', 'middleware' => 'banuser'], function () {



    //Route::get('/', [MainController::class, 'index']);
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/users', App\Http\Controllers\Admin\UserController::class);
    Route::get('/users/toggle/{id}', [App\Http\Controllers\Admin\UserController::class, 'toggle']);
    /*Route::get('/users/toggle/{id}', [App\Http\Controllers\Admin\UserbanController::class, 'togglebannn']);*/

    Route::get('/comments', [App\Http\Controllers\Admin\CommentController::class, 'index'])->name('admin.comments.index');
    Route::get('/comments/toggle/{id}', [App\Http\Controllers\Admin\CommentController::class, 'toggle']);
    Route::delete('/comments/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'destroy'])->name('comments.destroy');
    Route::resource('/years', \App\Http\Controllers\Admin\YearController::class);
    Route::resource('/ratings', \App\Http\Controllers\Admin\RatingController::class);
    Route::resource('/statuses', \App\Http\Controllers\Admin\StatusController::class);
    Route::resource('/ages', \App\Http\Controllers\Admin\AgeController::class);
    Route::resource('/qualities', \App\Http\Controllers\Admin\QualityController::class);
    Route::resource('/durations', \App\Http\Controllers\Admin\DurationController::class);
    Route::resource('/seasons', \App\Http\Controllers\Admin\SeasonController::class);
    /*Route::resource('/watches', \App\Http\Controllers\Admin\WatchController::class);*/


    Route::resource('/films', \App\Http\Controllers\Admin\FilmController::class)->except(['show']);


    Route::resource('/companies', \App\Http\Controllers\Admin\CompanyController::class);
    Route::resource('/composers', \App\Http\Controllers\Admin\ComposerController::class);
    Route::resource('/directors', \App\Http\Controllers\Admin\DirectorController::class);
    Route::resource('/actors', \App\Http\Controllers\Admin\ActorController::class);
    Route::resource('/countries', \App\Http\Controllers\Admin\CountryController::class);
    Route::resource('/languages', \App\Http\Controllers\Admin\LanguageController::class);
    Route::resource('/producers', \App\Http\Controllers\Admin\ProducerController::class);
    Route::resource('/captions', \App\Http\Controllers\Admin\CaptionController::class);
    Route::resource('/genres', \App\Http\Controllers\Admin\GenreController::class);
    Route::resource('/selections', \App\Http\Controllers\Admin\SelectionController::class);
    /*Route::resource('/sources', \App\Http\Controllers\Admin\SourceController::class);*/


});

Route::get('{category}/{slug}', [App\Http\Controllers\FilmController::class, 'show'])->name('single')->middleware(DraftOrPublicPost::class);     /*СТВЛО*/
/*Route::get('film/{slug}', [HomeController::class, 'show'])->name('single'); */        /*БУЛО*/              //17// Фаронт - головна сторінка

/*Route::get('/', function () {
    dd(33333333);
});*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
