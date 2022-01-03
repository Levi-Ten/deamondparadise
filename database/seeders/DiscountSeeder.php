<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::insert([
            [
                'discount' => 10
            ],
            [
                'discount' => 20
            ],
            [
                'discount' => 30
            ]
        ]);
    }
}
