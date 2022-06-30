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
        $new = $newsRepository->findById($news->id);
        $this->assertModelExists($new);
        $this->assertNotNull($new);
        $this->assertEquals($news->id,$new->id);
        $this->assertDatabaseHas('news',[
            'id'=>$new->id
        ]);
    }

    /**
     * @return void
     */
    public function testGetNewsForThreeLastDays(): void
    {
        $newsRepository = $this->app->make(NewsRepositoryInterface::class);
        $new = $newsRepository->getNewsForThreeLastDays();
        $this->assertNotEmpty($new);
        $this->assertNotNull($new);
        $this->assertIsNotString($new);
        foreach($new as $elem) {
            $this->assertDatabaseHas('news_information',[
                'name'=>$elem->news_information->name,
                'text'=>$elem->news_information->text
            ]);
        }

    }

    /**
     * @return void
     */
    public function testAll(): void
    {
        $newsRepository = $this->app->make(NewsRepositoryInterface::class);
        $new = $newsRepository->all();
        $this->assertNotEmpty($new);
        $this->assertNotNull($new);
        foreach($new as $elem) {
            $this->assertDatabaseHas('news_information',[
                'name'=>$elem->news_information->name,
                'text'=>$elem->news_information->text
            ]);
        }
    }



}
