@extends('admin.layouts.app')

@section('title', 'Create Admin User')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Admin User</h1>
        <a href="{{ route('admin.admin-users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Admin Users
        </a>
    </div>

    <!-- Create Admin User Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin User Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.admin-users.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="avatar">Profile Picture</label>
                            <input type="file" class="form-control-file" id="avatar" name="avatar" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="roles">Assign Roles</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="role_super_admin" name="roles[]" value="Super Admin">
                        <label class="form-check-label" for="role_super_admin">
                            Super Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="role_editor" name="roles[]" value="Editor">
                        <label class="form-check-label" for="role_editor">
                            Editor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="role_content_manager" name="roles[]" value="Content Manager">
                        <label class="form-check-label" for="role_content_manager">
                            Content Manager
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                        <label class="form-check-label" for="is_active">
                            Active Account
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bio">Bio/Description</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Brief description about the admin user"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Admin User
                    </button>
                    <a href="{{ route('admin.admin-users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
