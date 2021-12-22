<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::insert([
            ['description'=>'Good news',
            'image'=>'image.png'],
            ['description'=>'Good news1',
            'image'=>'image1.png'],
        ]);
    }
}
