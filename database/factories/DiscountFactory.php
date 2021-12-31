<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;
    private static $discount = 1;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'discount' => $this->faker->unique(true)->numberBetween(1, 100)
            'discount' => self::$discount++
        ];
    }
}
