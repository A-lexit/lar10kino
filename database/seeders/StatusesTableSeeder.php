<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Завершений',
            'Незавершений',
            'Невідомо',
        ];

        foreach ($titles as $title) {
            Status::create([
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
