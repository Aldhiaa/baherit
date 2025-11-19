<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    public function index(): View
    {
        $admins = Admin::with('roles')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.admin-users.index', compact('admins'));
    }

    public function create(): View
    {
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin.admin-users.create', compact('roles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'roles' => 'nullable|array',
            'roles.*' => 'string|exists:roles,name',
            'is_active' => 'boolean',
            'bio' => 'nullable|string|max:1000',
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        // Create admin user
        $admin = Admin::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'],
            'avatar' => $validated['avatar'] ?? null,
            'is_active' => $request->boolean('is_active'),
            'bio' => $validated['bio'],
        ]);

        // Assign roles
        if (!empty($validated['roles'])) {
            $admin->assignRole($validated['roles']);
        }

        return redirect()->route('admin.admin-users.index')
            ->with('success', 'Admin user created successfully.');
    }

    public function edit(Admin $adminUser): View
    {
        $roles = Role::where('guard_name', 'admin')->get();
        return view('admin.admin-users.edit', compact('adminUser', 'roles'));
    }

    public function update(Request $request, Admin $adminUser): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $adminUser->id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'roles' => 'nullable|array',
            'roles.*' => 'string|exists:roles,name',
            'is_active' => 'boolean',
            'bio' => 'nullable|string|max:1000',
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar
            if ($adminUser->avatar) {
                Storage::disk('public')->delete($adminUser->avatar);
            }
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        // Update admin user
        $updateData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'is_active' => $request->boolean('is_active'),
            'bio' => $validated['bio'],
        ];

        // Update password if provided
        if (!empty($validated['password'])) {
            $updateData['password'] = Hash::make($validated['password']);
        }

        // Update avatar if uploaded
        if (isset($validated['avatar'])) {
            $updateData['avatar'] = $validated['avatar'];
        }

        $adminUser->update($updateData);

        // Sync roles
        if (isset($validated['roles'])) {
            $adminUser->syncRoles($validated['roles']);
        } else {
            $adminUser->syncRoles([]);
        }

        return redirect()->route('admin.admin-users.index')
            ->with('success', 'Admin user updated successfully.');
    }

    public function destroy(Admin $adminUser): RedirectResponse
    {
        // Prevent deleting the current user
        if ($adminUser->id === auth('admin')->id()) {
            return redirect()->route('admin.admin-users.index')
                ->with('error', 'You cannot delete your own account.');
        }

        // Delete avatar if exists
        if ($adminUser->avatar) {
            Storage::disk('public')->delete($adminUser->avatar);
        }

        $adminUser->delete();

        return redirect()->route('admin.admin-users.index')
            ->with('success', 'Admin user deleted successfully.');
    }
}
