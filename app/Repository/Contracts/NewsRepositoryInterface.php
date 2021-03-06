<?php

namespace App\Repository\Contracts;
use Illuminate\Http\Response;

interface NewsRepositoryInterface
{
    public function findById(int $id) : mixed;
    public function getNewsForThreeLastDays() : mixed;
    public function all() : mixed;

}