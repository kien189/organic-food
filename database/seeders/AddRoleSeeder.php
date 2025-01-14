<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(7); // Ví dụ, gán cho người dùng có ID = 1
        if ($user) {
            $user->assignRole(['admin', 'user']);
        }
    }
}
