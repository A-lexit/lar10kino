<?php

namespace Database\Seeders;

use App\Models\Caption;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CaptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Англійські',
            'Українські',
            'Російські',
            'Ютуб',
            'Немає',
        ];

        foreach ($titles as $title) {
            Caption::create([
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
