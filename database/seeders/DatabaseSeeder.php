<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Discount::factory(99)->create();
        $this->call([
//            newsSeeder::class
            AdminSeeder::class,
            PriceSeeder::class,
        ]);
    }
}
