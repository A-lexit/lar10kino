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












        /*$this->call(FilmsTableSeeder::class);*/


        \App\Models\Film::each(function ($film) {
            \App\Models\Comment::factory(3)->create([
                'film_id' => $film->id
            ]);

            \App\Models\State::factory(1)->create([
                'film_id' => $film->id
            ]);
        });




        //Якщо беремо режисерів з новостворених фабрик (рандомні абракадабра-значення)
        /*$directors = \App\Models\Director::factory(5)->create();*/


       /* $directors = $this->call(DirectorsTableSeeder::class);
        $films = \App\Models\Film::factory(1)->create();*/




        //якщо беремо директорів з бази (попередньо додано все через сіди)
        //$directors_id = Director::pluck('id');
        /*$directors_id = $directors->pluck('id');*/

        /*$films->each(function ($film) use ($directors_id) {
     $film->directors()->attach($directors_id[1]);

    });*/


    }
}
