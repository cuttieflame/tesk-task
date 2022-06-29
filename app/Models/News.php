<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method where(string $string, int $id)
 * @method orderBy(string $string)
 * @method static inRandomOrder()
 */
class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    public function room_information(): HasOne
    {
        return $this->hasOne(NewsInformation::class,'id','id');
    }
}
