<?php

namespace Database\Seeders;

use App\Models\Quality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualitiesTableSeeder extends Seeder
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
            '1080p',
            '480p',
            'HD 720p',
            '360p',
            'BDRip',
            'TVRip (720x576)',
            'Невідомо',
        ];

        foreach ($titles as $title) {
            Quality::create([
                'title' => $title,
            ]);
        }


    }
}
