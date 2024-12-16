<?php

namespace Database\Seeders;

use App\Models\Selection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SelectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Зимові',
            'Тачки',
            'Поліція',
            'Спок',
            'Шпигуни',
            'Супергерої',
            'Космічні',
            'Французькі',
        ];

        foreach ($titles as $title) {
            Selection::create([
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
