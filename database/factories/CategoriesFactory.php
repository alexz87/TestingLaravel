<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
use Faker\Factory as Faker;

class CategoriesFactory extends Factory
{
    protected $model = Categories::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('uk_UA');
        
        return [
            'categories' => $faker->sentence(10)
        ];
    }
}
