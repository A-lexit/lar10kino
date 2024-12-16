<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*$title = $this->faker->sentence(rand(3, 8), true);*/
        /*$title = $this->faker->sentence(6, true);
        $slug =  \Str::substr(Str::lower(preg_replace('/\s+/', '-', $title )), 0, -1); */  //використовуються ф-ції хелпери сайт laravel


        /*$title1 = 'ggggggggg';

        $title2 = 'jjjjjjjjj';

        $data = [
            'title' => $title1,
            'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title1 )), 0, -1),
        ];

        return $data;
*/







        /*$title1 = 'gggggggggwww';
        $slug1 = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title1 )), 0, -1);

        $title2 = 'jjjjjjjjj';
        $slug2 = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title2 )), 0, -1);

                $data = [
            [
                'title' => $title1,
                'slug' => $slug1,
            ],

            [
                'title' => $title2,
                'slug' => $slug2,
            ]


        ];



        return $data;*/



        /*
               $title1 = 'gggggggggnnnnnnn';

               $title2 = 'jjjjjjjjjnnnn';





              $data = [
                   [
                       'title' => $title1,
                       'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title1 )), 0, -1),
                   ],

                   [
                       'title' => $title2,
                       'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title2 )), 0, -1),
                   ]


               ];

               return $data;*/


        /*$title = ['wwww', 'dfssaf', 'йййййййй', 'tttt', 'yyyy'];

        return [



            'title' => $title[2],
            'title' => $title[3],
        ];*/


   /*     $title = array('wwww', 'dfssaf', 'йййййййй', 'tttt', 'yyyy');


        return [



            'title' => $title[2],
            'title' => $title[3],



];*/

/*
Ок - але тільки 1 значення -wwww

          $titles = array('wwww', 'dfssaf', 'йййййййй', 'tttt', 'yyyy');

foreach ($titles as $title) {
    $data = [
        'title' => $title,
        'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title )), 0, -1),
    ];

    return $data;


    }*/

        $title = array('wet', 'dfssaf', 'йййййййй', 'tttt', 'yyyy');



        return [
                'title' => $title[1],
                'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title[1] )), 0, -1),
        ],

        [
            'title' => $title[2],
            'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title[2] )), 0, -1),
        ]
            ;





    }
}
