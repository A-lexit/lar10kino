<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Австралія',
            'Аруба',
            'Бельгія',
            'Болгарія',
            'Велика Британія',
            'Гонконг',
            'Ірландія',
            'Італія',
            'Канада',
            'Китай',
            'Мальта',
            'Мексика',
            'Німеччина',
            'Нова Зеландія',
            'США',
            'Україна',
            'Франція',
            'Чехія',
            'Швейцарія',
            'Японія',
            'Невідомо',
        ];

        foreach ($titles as $title) {
            Country::create([
                'title' => $title,
            ]);
        }











        /* цей варіант вимагає вручну вказувати slug
                 $data =
                    [
                        'title' => 'Детективekkw',
                 'slug' => 'ggggggggw'

                ];

                DB::table('countries')->insert($data);*/


    }
}
