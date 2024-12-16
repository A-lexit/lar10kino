<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Sluggable\SlugOptions;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            '4',
            '5',
            '10',
        ];

        foreach ($titles as $title) {
            Rating::create([
                'title' => $title,
            ]);
        }




         /*цей варіант вимагає вручну вказувати slug*/
                 /*$data =
                    [
                        'title' => 'Детективekkw',
                 'slug' => 'ggggggggw'

                ];

                DB::table('ratings')->insert($data);*/


    }
    /*public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }*/

}
