<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('uk_UA');
        
        return [
            'img' => 'img_'.rand(1, 7).'.jpg',
            'title' => $faker->text(10),
            'date' => $faker->date(),
            'announce' => $faker->text(50, 100),
            'news_id' => rand(1, 3)
        ];
    }
}
