<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genres = ['romance','action','cartoon'];

        for($i=0; $i<3; $i++){
            DB::table('genres')->insert([
                'name' => $genres[$i]
            ]);
        }

    }
}
