<?php

namespace App\Database\Seeds;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user' => 'civia',
                'password' => md5('12200011')
            ],
            [
                'user' => 'salwa',
                'password' => md5('12200066')
            ],
            [
                'user' => 'ansel',
                'password' =>md5('12200603')

            ],
            [
                'user'  => 'donny',
                'password' =>md5('12200180')
            ]
            
        ];
        $p = new userModel();
        $p->insertBatch($data);
            
        
    }
}
