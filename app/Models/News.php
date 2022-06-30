<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method where(string $string, int $id)
 * @method orderBy(string $string)
 * @method static inRandomOrder()
 * @method whereDate(string $string, string $string1, \Carbon\Carbon $addDays)
 */
class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public function news_information(): HasOne
    {
        return $this->hasOne(NewsInformation::class,'id','id');
    }
}
