<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
            [
                'picture_pics' => 'https://gyazo.com/a9c543bd13d867a14d559585c87c042d.png',
            ],
        ],
        );
    }
}
