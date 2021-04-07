<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Schema;

class Gamesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'titel' => 'CSGO',
                'path' => 'https://gyazo.com/534657989ef9b241ba6895cfbcbfd572.png',
                'shortdesc' => 'Counter-Strike: Global Offensive is a first-person shooter released by Valve on August 21, 2012.',
                'desc' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content.',
                'thumbnail' => '.',
                'qty' => '1'
            ],[
        'titel' => 'GTA V',
        'path' => 'https://gyazo.com/468f00f751b8c7ae0221178edadeebad.png',
        'shortdesc' => 'When a young street hustler, a retired bank robber and a terrifying psychopath land themselves in trouble, they must pull off a series of dangerous heists to survive in a city in which they can trust nobody, least of all each other.',
        'desc' => 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber Michael De Santa, street gangster Franklin Clinton, and drug dealer and arms smuggler Trevor Philips—and their efforts to commit heists while under pressure from a corrupt government agency and powerful criminals. The open world design lets players freely roam San Andreas open countryside and the fictional city of Los Santos, based on Los Angeles.',
        'thumbnail' => '.',
        'qty' => '1'
    ],[
                'titel' => 'Brawlhalla',
                'path' => 'https://gyazo.com/274b43d2b91cb37660829ae93741674c.png',
                'shortdesc' => 'Discover the free-to-play fighting game where the greatest legends prove themselves as the best of history, present and future.',
                'desc' => 'An epic platform fighter for up to 8 players online or local. Try casual free-for-alls, ranked matches, or invite friends to a private room. And its free! Play cross-platform with millions of players on PlayStation, Xbox, Nintendo Switch, iOS, Android & Steam! Frequent updates. Over fifty Legends.',
                'thumbnail' => '.',
                'qty' => '1'
            ],[
                'titel' => 'Rocket League',
                'path' => 'https://gyazo.com/2b58b2a78b2ac946c2e971b1bd0552c0.png',
                'shortdesc' => 'Rocket League is a high-powered hybrid of arcade-style soccer and vehicular mayhem with easy-to-understand controls and fluid, physics-driven competition.',
                'desc' => 'Rocket League is a football-like computer game played with in-game vehicles. Rocket League was developed and published by Psyonix. In the game, players control a vehicle with which they must try to score goals on a field that resembles a football field.',
                'thumbnail' => '.',
                'qty' => '1'
            ]
    ]);
    }
}
