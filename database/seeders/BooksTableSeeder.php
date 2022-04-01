<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
          [
            'book_name'=>'Balonla Beş Hafta',
            'author'=>'Jules Verne',
            'pagenum'=>387,
          ],
          [
            'book_name'=>'Denizler Altında 20.000 Fersah',
            'author'=>'Jules Verne',
            'pagenum'=>290,
          ],
          [
            'book_name'=>'Serenad',
            'author'=>'Zülfü Livaneli',
            'pagenum'=>304,
          ],
          [
            'book_name'=>'Gizli Odanın Sırrı',
            'author'=>'Enid Blyton',
            'pagenum'=>220,
          ]

          ]);
    }
}

// $data=DB::table('books')->insert(    //tabloya VERİ EKLEME
//     [
//       'book_name'=>'Laravel 6',
//       'author'=>'Emrah Yüksel',
//       'nop'=>166
//     ]);
// echo $data;
