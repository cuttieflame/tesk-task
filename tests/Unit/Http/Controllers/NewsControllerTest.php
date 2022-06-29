<?php

namespace Http\Controllers;

use App\Http\Controllers\NewsController;
use App\Models\News;
use Tests\TestCase;

/**
 *
 */
class NewsControllerTest extends TestCase
{

    /**
     * @return void
     */
    public function testShow(): void
    {
        $news = News::inRandomOrder()->first();
        $response = $this->get("/news/$news->id");
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testIndex(): void
    {
        $news = News::inRandomOrder()->first();
        $response = $this->get("/news/");
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testGetAll(): void
    {
        $news = News::inRandomOrder()->first();
        $response = $this->get("/news/getAll");
        $response->assertStatus(200);
    }
}
