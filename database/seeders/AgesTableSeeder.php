<?php

namespace Database\Seeders;

use App\Models\Age;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            '18+',
            '16+',
            '14+',
            '12+',
            '6+',
            '3+',
            '0+',
            'R',
            'TV-14',
            'TV-MA',
            'TV-PG',
            'TV-G',
            'PG',
            'Невідомо',
        ];

        foreach ($titles as $title) {
            Age::create([
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
