<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //создание 20 записей в таблице news
        News::factory()->count(20)->create();
        //создание 20 записей в таблице news_information
        NewsInformation::factory()->count(20)->create();
    }
}
