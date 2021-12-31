<?php

namespace Database\Seeders;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::insert([
            [
                'service' => 'Service 1',
                'price' => 100,
                'created_at' => Carbon::now(),
            ],
            [
                'service' => 'Service 2',
                'price' => 200,
                'created_at' => Carbon::now(),
            ],
            [
                'service' => 'Service 3',
                'price' => 300,
                'created_at' => Carbon::now(),
            ],
            [
                'service' => 'Service 4',
                'price' => 400,
                'created_at' => Carbon::now(),
            ],
            [
                'service' => 'Service 5',
                'price' => 500,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
