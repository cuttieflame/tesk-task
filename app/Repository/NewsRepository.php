<?php

namespace App\Repository;

use App\Models\News;
use App\Repository\Contracts\NewsRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 *
 */
class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @var News
     */
    private News $news;

    /**
     * @param News $news
     */
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed
    {
       return $this->news->where('id',$id)->with('news_information')->first();
    }

    /**
     * @return array|Collection
     */
    public function getNewsForThreeLastDays(): array|Collection
    {
        return $this->news->with('news_information')->whereDate('created_at','>',Carbon::now()->subDays(3))->get();
    }

    /**
     * @return mixed
     */
    public function all(): mixed
    {
        return $this->news->orderBy('created_at')->with('news_information')->paginate(10);
    }
}