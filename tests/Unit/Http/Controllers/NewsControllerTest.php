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
        $this->assertGuest($guard = null);
        $response->assertOk();
        $response->assertViewIs('welcome');

    }

    /**
     * @return void
     */
    public function testIndex(): void
    {
        $news = News::inRandomOrder()->first();
        $response = $this->get("/news/");
        $this->assertGuest($guard = null);
        $response->assertOk();
        $response->assertViewIs('welcome');

    }

    /**
     * @return void
     */
    public function testGetAll(): void
    {
        $news = News::inRandomOrder()->first();
        $response = $this->get("/news/getAll");
        $this->assertGuest($guard = null);
        $response->assertOk();
        $response->assertViewIs('welcome');

    }
}
