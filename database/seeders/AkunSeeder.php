<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            [
            'username' => 'admin',
            'name' => 'ini adalah admin',
            'email' => 'admin@example.com',
            'level' => 'admin',
            'password' => bcrypt ('admin123'),
            ],
            [
            'username' => 'user',
            'name' => 'ini adalah penyuluh',
            'email' => 'penyuluh@example.com',
            'level' => 'penyuluh',
            'password' => bcrypt ('123456'),
            ]
            ];

        foreach ($user as $key => $value){
            user::create($value);
        }
    }
}
