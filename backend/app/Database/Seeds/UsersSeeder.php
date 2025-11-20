<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $data = [
            [
                'id' => '123456789',
                'first_name' => 'Romeo Andree',
                'middle_name' => '',
                'last_name' => 'Bundalian',
                'email' => 'romdreeb7645@gmail.com',
                'password_hash' => $password,
                'type' => 'admin',
                'account_status' => 1,
                'email_activated' => 1,
                'gender' => 'Male',
                'profile_image' => '',
                'deleted_at' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => '987654321',
                'first_name' => 'Maria Clara',
                'middle_name' => 'D.',
                'last_name' => 'Santos',
                'email' => 'maria.clara@example.com',
                'password_hash' => password_hash('client123', PASSWORD_DEFAULT),
                'type' => 'client',
                'account_status' => 1,
                'email_activated' => 1,
                'gender' => 'Female',
                'profile_image' => 'uploads/profile_images/maria.jpg',
                'deleted_at' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [ // ← Added missing comma above this line
                'id' => '987654322',
                'first_name' => 'Juan Miguel',
                'middle_name' => 'R.',
                'last_name' => 'Del Rosario',
                'email' => 'juan.delrosario@example.com',
                'password_hash' => password_hash('juanclient123', PASSWORD_DEFAULT),
                'type' => 'client',
                'account_status' => 1,
                'email_activated' => 0,
                'gender' => 'Male',
                'profile_image' => 'uploads/profile_images/juan.jpg',
                'deleted_at' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('Users_Table')->insertBatch($data);
    }
}
