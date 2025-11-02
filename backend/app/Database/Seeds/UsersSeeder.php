<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
        // no need to add id since its auto increment
        $users = [
            [
                'first_name' => 'Adrian',
                'middle_name' => 'Aseñas',
                'last_name' => 'Guillermo',
                'email' => 'adrianfguillermo@gmail.com',
                'type' => 'admin',
                'account_status' => '1',
                'password_hash' => $password,
                'email_activated' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Mary Arwen',
                'middle_name' => 'Lopez',
                'last_name' => 'Quemuel',
                'email' => 'arwen.quemuel.030@gmail.com',
                'type' => 'client',
                'account_status' => '1',
                'password_hash' => $password,
                'email_activated' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
