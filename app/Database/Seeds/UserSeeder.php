<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'dynarm',
            'useremail' => 'diyanarum28@gmail.com',
            'userpassword' => password_hash('UASWEB', PASSWORD_DEFAULT),
        ]);
    }
}