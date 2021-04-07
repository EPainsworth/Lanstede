<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Schema;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            [
                'text' => 'On this site you can find everything about the upcoming Lan party and also photos of the previous Lan parties. Here you can, for example, order food when you log in and participate in various games that are indicated on the site. You can also organize tournaments yourself if you want, but you have to contact us first.',
       ]
        ]);
    }
}
