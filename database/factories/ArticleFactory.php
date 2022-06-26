<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
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
            'news_id' => rand(1, 20)
        ];
    }
}
