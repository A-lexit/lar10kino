<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Year;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class YearFactory extends Factory
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

        static $title = 1930;

        return [
            //
            'title' => $title++,
            /*'title' => $this->faker->numberBetween(1, 5),*/
            /*'slug' => Str::substr(Str::lower(preg_replace('/\s+/', '-', $title )), 0, -1),*/
            /*'origin_title' => $this->faker->word,
            'description' => $this->faker->word,
            'category_id' => rand(1, 2),*/

            /*'views' => $this->faker->numberBetween(0, 5000),*/

        ];
    }
}
