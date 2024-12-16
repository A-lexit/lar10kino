<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Українська',
            'Російська',
            'Англійська',
            'Українська (СТБ)',
            'Українська (ICTV)',
            'Українська (НТН)',
            'Українська (Інтер)',
            'Українська (ТРК Україна)',
            'Українська (ТЕТ)',
            'Українська (QTV)',
            'Українська (НЛО TV)',
            'Українська (Новий канал)',
            'Українська (К1)',
            'Українська (М1)',
            'Українська (1+1)',
            'Українська (2+2)',
            'Українська (Cine+)',
            'Українська (Paramount Comedy)',
            'Українська (Netflix)',
            'Українська (Line-in)',
            'Українська (Цікава Ідея)',
            'Українська (AMC)',
            'Українська (LeDoyen)',
            'Українська (ТакТребаПродакш)',
            'Українська (Postmodern)',
            'Українська (Кіно)',
            'Українська (Tretyakoff production)',
            'Українська (AniUA)',
            'Українська (Pie Post Production)',
            'Українська (Cinema Sound Production)',
            'Українська (КІТ)',
            'Українська (Омікрон(Hurtom))',
            'Українська (SkomUA)',
            'Українська (DniproFilm)',
            'Українська (HDrezka Studio)',
            'Українська (КІНОТА)',
            'Українська (UATeam)',
            'Українська ( simpsonsua.tv)',
            'Українська (Колодій)',
            'Українська (AAA-Sound)',
            'Українська (Багатоголосий закадровий)',
            'Українська (Двоголосий)',
            'Українська (Одноголосий)',
        ];

        foreach ($titles as $title) {
            Language::create([
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
