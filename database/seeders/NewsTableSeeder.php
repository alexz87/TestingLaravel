<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = factory(App\Models\News::class, 'admin', 3)->create();
        factory(App\Models\Categories::class, 'admin', 20)->create()->each(function ($categories) {
            
        });
    }
}
