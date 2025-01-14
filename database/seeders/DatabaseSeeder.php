<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Tạo một số permissions nếu chưa tồn tại
        $createPost = Permission::firstOrCreate(['name' => 'create post']);
        $editPost = Permission::firstOrCreate(['name' => 'edit post']);

        // Tạo roles nếu chưa tồn tại
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Gán permissions cho roles
        $admin->givePermissionTo($createPost);
        $admin->givePermissionTo($editPost);

        // Gán roles cho user
        $user = User::find(1); // Ví dụ, gán cho người dùng có ID = 1
        if ($user) {
            $user->assignRole(['admin', 'user']);
        }
    }
}
