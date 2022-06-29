<?php

namespace Database\Factories;

use App\Models\NewsInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsInformation>
 */
class NewsInformationFactory extends Factory
{

    protected $model = NewsInformation::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'text'=>$this->faker->realText($maxNbChars = 250, $indexSize = 2)
        ];
    }
}
