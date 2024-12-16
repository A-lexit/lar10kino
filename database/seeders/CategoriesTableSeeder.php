<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Sluggable\SlugOptions;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*Category::create([
            'title' => 'Фільми',
        ]);

        Category::create([
            'title' => 'Серіали',
        ]);

        Category::create([
            'title' => 'Мультсеріали',
        ]);

        Category::create([
            'title' => 'Мультики',
        ]);*/


        $titles = [
            'Фільми',
            'Серіали',
            'Мультики',
            'Мультсеріали',
        ];

        foreach ($titles as $title) {
            Category::create([
                'title' => $title,
            ]);
        }
    }

    /*public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }*/
}
