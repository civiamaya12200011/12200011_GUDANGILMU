<?php

namespace App\Database\Seeds;
use App\Models\bookModel;

use CodeIgniter\Database\Seeder;

class Book extends Seeder
{
    public function run()
    {
        $data = [
            [
             'judulbuku' => 'semutdanjangkrik',
             'pengarang' => 'ansel',
             'tahunterbit' => '2017',

            ],
            [
                'judulbuku' => 'anjingdankelinci',
                'pengarang' => 'civia',
                'tahunterbit' => '2018',
            ],
            [
                'judulbuku' => 'rajalebahdansesendokmadu',
                'pengarang' => 'salwa',
                'tahunterbit' => '2019',
            ],
            
        
            
        ];
        $sp = new bookModel();
        $sp->insertBatch($data);
    }
}
