<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions
        $permissions = [
            'view services',
            'create services',
            'edit services',
            'delete services',
            'view case studies',
            'create case studies',
            'edit case studies',
            'delete case studies',
            'view team members',
            'create team members',
            'edit team members',
            'delete team members',
            'view technologies',
            'create technologies',
            'edit technologies',
            'delete technologies',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);

        // Assign all permissions to admin role
        $adminRole->givePermissionTo(Permission::all());

        // Assign limited permissions to editor role
        $editorPermissions = [
            'view services',
            'create services',
            'edit services',
            'view case studies',
            'create case studies',
            'edit case studies',
            'view team members',
            'create team members',
            'edit team members',
            'view technologies',
            'create technologies',
            'edit technologies',
        ];

        $editorRole->givePermissionTo($editorPermissions);

        // Create admin user if not exists
        $adminUser = DB::table('users')->where('email', 'admin@example.com')->first();

        if (!$adminUser) {
            $userId = DB::table('users')->insertGetId([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Assign admin role to the user
            $user = \App\Models\User::find($userId);
            $user->assignRole('admin');
        }
    }
}
