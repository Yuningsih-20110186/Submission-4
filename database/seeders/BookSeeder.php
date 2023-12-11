<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookData = [
            [
                'judul' => 'Hujan',
                'pengarang' => 'Tere Liye',
                'penerbit' =>'Tere Liye',
                'tahun_terbit' => '2018',
            ],

        ];

        foreach($bookData as $value){
            Book::create($value);
        }
    }
}
