<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }


    public function run(): void
    {
        $initialUsers = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456789',
            ],
        ];

        foreach ($initialUsers as $user) {
            $admin = $this->user->getByEmail($user['email']);
            if (!$admin) {
                $create_user = $this->user->create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                ]);
            }
        }
    }
}
