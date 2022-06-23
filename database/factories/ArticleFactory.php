<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
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
            'text' => $faker->text(200, 1000),
            'categories_id' => rand(1, 20)
        ];
    }
}
