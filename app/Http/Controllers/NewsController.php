<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\NewsRepositoryInterface;
use App\Repository\NewsRepository;
use Illuminate\Http\Response;

/**
 *
 */
class NewsController extends Controller
{
    /**
     * @var NewsRepository
     */
    private NewsRepositoryInterface $newsRepository;

    /**
     * @param NewsRepositoryInterface $newsRepository
     */
    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $news = $this->newsRepository->getNewsForThreeLastDays();
        return response()->view('welcome',compact('news'),200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(int $id): Response
    {
        $news = $this->newsRepository->find($id);
        return response()->view('welcome',compact('news'),200);
    }

    /**
     * @return Response
     */
    public function getAll(): Response
    {
        $news = $this->newsRepository->all();
        return response()->view('welcome',compact('news'),200);
    }

}
