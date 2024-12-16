<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Film;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*$title = $this->faker->sentence(rand(3, 8), true);*/
        //$title = $this->faker->sentence(6, true);
        //$slug =  Str::substr(Str::lower(preg_replace('/\s+/', '-', $title )), 0, -1);   //використовуються ф-ції хелпери сайт laravel


        return [
            //
            /*'title' => $title,
            'slug' => $slug,
            'origin_title' => $this->faker->sentence(rand(3, 8), true),
            'duration' => $this->faker->word,
            'other_actor' => $this->faker->word,
            'description' => $this->faker->sentence(6, true),
            'category_id' => $this->faker->numberBetween($min=1, $max=4),
            'rating_id' => $this->faker->numberBetween($min=1, $max=1),
            'year_id' => $this->faker->numberBetween($min=1, $max=1),
            'age_id' => $this->faker->numberBetween($min=1, $max=1),
            'quality_id' => $this->faker->numberBetween($min=1, $max=1),
            'thumbnail' => $this->faker->image(public_path('images'),400,300, null, false),
            /*'thumbnail' => $this->faker->image(storage_path('tasks')),*/
            /*'slug' => $slug,
            'origin_title' => $this->faker->word,
            'description' => $this->faker->word,
            'category_id' => rand(1, 2),*/

            /*'views' => $this->faker->numberBetween(0, 5000),
            */
            'created_at' => $this->faker->dateTimeBetween('-1 years'),

        ];
    }
}
