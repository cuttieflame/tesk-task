<?php

namespace Repository;

use App\Models\News;
use App\Repository\Contracts\NewsRepositoryInterface;
use Tests\TestCase;

/**
 *
 */
class NewsRepositoryTest extends TestCase
{
    /**
     * @return void
     */
    public function testFind(): void
    {
        $newsRepository = $this->app->make(NewsRepositoryInterface::class);
        $news = News::inRandomOrder()->first();
        $new = $newsRepository->find($news->id);
        $this->assertEquals($news->id,$new->id);
    }

    /**
     * @return void
     */
    public function testGetNewsForThreeLastDays(): void
    {
        $newsRepository = $this->app->make(NewsRepositoryInterface::class);
        $new = $newsRepository->getNewsForThreeLastDays();

        $this->assertNotEmpty($new);
    }

    /**
     * @return void
     */
    public function testAll(): void
    {
        $newsRepository = $this->app->make(NewsRepositoryInterface::class);
        $new = $newsRepository->all();
        $this->assertNotEmpty($new);
    }



}
