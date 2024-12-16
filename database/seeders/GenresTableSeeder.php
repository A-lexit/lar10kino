<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       /* Genre::create([
            'title' => 'Комедія',
        ]);

        Genre::create([
            'title' => 'Сімейний',
        ]);

        Genre::create([
            'title' => 'Спортивний',
        ]);

        Genre::create([
            'title' => 'Молодіжний',
        ]);

        Genre::create([
            'title' => 'Пародія',
        ]);

        Genre::create([
            'title' => 'Пригоди',
        ]);

        Genre::create([
            'title' => 'Вестерн',
        ]);

        Genre::create([
            'title' => 'Екранізація',
        ]);

        Genre::create([
            'title' => 'Бойовик',
        ]);

        Genre::create([
            'title' => 'Історичний',
        ]);

        Genre::create([
            'title' => 'Екшн',
        ]);

        Genre::create([
            'title' => 'Жахи',
        ]);

        Genre::create([
            'title' => 'Драма',
        ]);

        Genre::create([
            'title' => 'Детектив',
        ]);

        Genre::create([
            'title' => 'Кримінал',
        ]);

        Genre::create([
            'title' => 'Фентезі',
        ]);

        Genre::create([
            'title' => 'Фантастика',
        ]);

        Genre::create([
            'title' => 'Трилер',
        ]);

        Genre::create([
            'title' => 'Автобіографія',
        ]);*/



        $titles = [
            'Комедія',
            'Сімейний',
            'Спортивний',
            'Молодіжний',
            'Пародія',
            'Пригоди',
            'Вестерн',
            'Екранізація',
            'Бойовик',
            'Історичний',
            'Екшн',
            'Жахи',
            'Драма',
            'Детектив',
            'Кримінал',
            'Фентезі',
            'Фантастика',
            'Трилер',
            'Автобіографія',
        ];

        foreach ($titles as $title) {
            Genre::create([
                'title' => $title,
            ]);
        }
    }
}
