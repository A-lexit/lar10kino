<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Director;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */



    public function run(): void
    {
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*\App\Models\Category::factory()->create();
        \App\Models\Year::factory(94)->create();*/

        $this->call(RatingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

        /*\App\Models\Country::factory()->create();*/




        $this->call(CountriesTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(AgesTableSeeder::class);
        $this->call(CaptionsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ComposersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ProducersTableSeeder::class);
        $this->call(QualitiesTableSeeder::class);

        /*$this->call(YearsTableSeeder::class);*/
        $this->call(StatusesTableSeeder::class);
        $this->call(SelectionsTableSeeder::class);
        \App\Models\Year::factory(94)->create();

        //Якщо беремо режисерів з новостворених фабрик (рандомні абракадабра-значення)
        /*$directors = \App\Models\Director::factory(5)->create();*/


        //$directors = $this->call(DirectorsTableSeeder::class);
        //$films = \App\Models\Film::factory(10)->create();




        //якщо беремо директорів з бази (попередньо додано все через сіди)
        //$directors_id = Director::pluck('id');
        /*$directors_id = $directors->pluck('id');*/

        /*$films->each(function ($film) use ($directors_id) {
     $film->directors()->attach($directors_id->random(3));

    });*/


    }
}
