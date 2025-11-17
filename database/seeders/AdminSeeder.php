<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions for admin guard
        $permissions = [
            // Dashboard
            'view-dashboard',
            
            // Services Management
            'view-services',
            'create-services',
            'edit-services',
            'delete-services',
            
            // Blog Management
            'view-blogs',
            'create-blogs',
            'edit-blogs',
            'delete-blogs',
            
            // Portfolio Management
            'view-portfolios',
            'create-portfolios',
            'edit-portfolios',
            'delete-portfolios',
            
            // FAQ Management
            'view-faqs',
            'create-faqs',
            'edit-faqs',
            'delete-faqs',
            
            // Team Management
            'view-team',
            'create-team',
            'edit-team',
            'delete-team',
            
            // Testimonial Management
            'view-testimonials',
            'create-testimonials',
            'edit-testimonials',
            'delete-testimonials',
            
            // Counter Management
            'view-counters',
            'create-counters',
            'edit-counters',
            'delete-counters',
            
            // Banner Management
            'view-banners',
            'create-banners',
            'edit-banners',
            'delete-banners',
            
            // Page Management
            'view-pages',
            'create-pages',
            'edit-pages',
            'delete-pages',
            
            // Settings Management
            'view-settings',
            'edit-settings',
            
            // Menu Management
            'view-menus',
            'create-menus',
            'edit-menus',
            'delete-menus',
            
            // Admin Management
            'view-admins',
            'create-admins',
            'edit-admins',
            'delete-admins',
            
            // Role & Permission Management
            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission, 'guard_name' => 'admin']
            );
        }

        // Create Super Admin Role
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'Super Admin', 'guard_name' => 'admin']
        );
        $superAdminRole->syncPermissions(Permission::where('guard_name', 'admin')->get());

        // Create Editor Role (limited permissions)
        $editorRole = Role::firstOrCreate(
            ['name' => 'Editor', 'guard_name' => 'admin']
        );
        $editorRole->syncPermissions([
            'view-dashboard',
            'view-services', 'edit-services',
            'view-blogs', 'create-blogs', 'edit-blogs',
            'view-portfolios', 'create-portfolios', 'edit-portfolios',
            'view-faqs', 'create-faqs', 'edit-faqs',
            'view-team', 'edit-team',
            'view-testimonials', 'edit-testimonials',
        ]);

        // Create Content Manager Role
        $contentManagerRole = Role::firstOrCreate(
            ['name' => 'Content Manager', 'guard_name' => 'admin']
        );
        $contentManagerRole->syncPermissions([
            'view-dashboard',
            'view-services', 'create-services', 'edit-services', 'delete-services',
            'view-blogs', 'create-blogs', 'edit-blogs', 'delete-blogs',
            'view-portfolios', 'create-portfolios', 'edit-portfolios', 'delete-portfolios',
            'view-faqs', 'create-faqs', 'edit-faqs', 'delete-faqs',
            'view-team', 'create-team', 'edit-team', 'delete-team',
            'view-testimonials', 'create-testimonials', 'edit-testimonials', 'delete-testimonials',
            'view-banners', 'edit-banners',
            'view-pages', 'edit-pages',
        ]);

        // Create Super Admin User
        $superAdmin = Admin::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Super Admin',
                'password' => 'password', // Will be hashed automatically
                'is_active' => true,
            ]
        );
        $superAdmin->assignRole($superAdminRole);

        // Create Editor User
        $editor = Admin::firstOrCreate(
            ['email' => 'editor@admin.com'],
            [
                'name' => 'Editor',
                'password' => 'password',
                'is_active' => true,
            ]
        );
        $editor->assignRole($editorRole);

        $this->command->info('Admin users created successfully!');
        $this->command->info('Super Admin: admin@admin.com / password');
        $this->command->info('Editor: editor@admin.com / password');
    }
}
