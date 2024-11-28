<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $movies = [
            [
                'title' => 'The Batman',
                'photo' => 'images/thebatman.jpg',
                'publish_date' => '2022-3-2',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'genre_id' => 2
            ],
            [
                'title' => 'Big Hero 6 ',
                'photo' => 'images/bighero6.jpg',
                'publish_date' => '2014-11-7',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'genre_id' => 3
            ],
            [
                'title' => 'Avengers: Endgame',
                'photo' => 'images/endgame.jpg',
                'publish_date' => '2019-4-24',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'genre_id' => 2
            ],
            [
                'title' => 'Shrek',
                'photo' => 'images/shrek.jpg',
                'publish_date' => '2001-4-22',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'genre_id' => 1
            ],
            [
                'title' => 'Titanic',
                'photo' => 'images/titanic.jpg',
                'publish_date' => '1997-12-19',
                'description' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content.',
                'genre_id' => 1
            ],
        ];


        DB::table('movies')->insert($movies);
    }
}
