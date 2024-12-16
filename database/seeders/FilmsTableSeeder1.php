<?php

namespace Database\Seeders;

use http\Env\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */




    public function run(): void
    {
                 $data = [


                             'title' => 'Супер Шоу Супер Братьев Марио!1111',
                             'slug' => 'supier-shou-supier-brat-iev-mario111',
                             'origin_title' => 'The Super Mario Bros. Super Show!',
                             'description' => 'Братья Марио попали через канализацию в Грибное королевство и спасли принцессу Пич от короля Купы. Их цель: спасти королевство от зла и вернуться в Бруклин. Теперь Марио и Луиджи стали попадать в переделки Купы и других злодеев в своих приключениях, но они всегда спасаются и побеждают злодеев. ',
                             'duration' => ' 22 хв.',
                             'other_actor' => 'Лу Альбано, Харви Аткин, Джон Стокер, Дэнни Уэллс, Джинни Элиас, Роберт Бокстэл, Грег Мортон, Дориан Джо Кларк, Джойс Гордон, Роб Кауэн',
                             'note' => null,
                             'category_id' => 3,
                             'year_id' => 60,
                             'quality_id' => 4,
                             'rating_id' => 3,
                             'age_id' => 5,
                             'status_id' => 1,
                             'season_id' => 1,
                             /*'thumbnail' => 'images/2024-04-14/futurama.png',*/
                             'thumbnail' => 'images/2024-04-14/Супер Шоу Супер Братьев Марио! 1989 season 1.jpg',


                 ];





                DB::table('films')->insert($data);









    }
}
