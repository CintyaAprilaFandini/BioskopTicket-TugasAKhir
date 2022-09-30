<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = 
        [
            [
                'nama_film' => 'Ngeri Ngeri Sedep ', 
                'desk_film' => 'xx ', 
                'cover_film' => 'uploads/ngeri.jpg',
                'harga' => '40000'
            ],
            [
                'nama_film' => 'KKN Di Desa Penari', 
                'desk_film' => 'xx', 
                'cover_film' => 'uploads/kkn.jpg',
                'harga' => '45000'
            ],
            [
                'nama_film' => 'Jurassic World: Fallen Kingdom', 
                'desk_film' => 'xx  ', 
                'cover_film' => 'uploads/jurassic.jpg',
                'harga' => '35000'
            ],
            
        ];
        DB::table('movies')->insert($movies);
    }
}
