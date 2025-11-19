@extends('admin.layouts.app')

@section('title', 'Edit Role')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Role</h1>
        <a href="{{ route('admin.roles.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Roles
        </a>
    </div>

    <!-- Edit Role Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Role Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.roles.update', $role ?? 1) }}">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text text-muted">e.g., Content Manager, Editor</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="guard_name">Guard</label>
                            <select class="form-control" id="guard_name" name="guard_name" required>
                                <option value="admin">Admin</option>
                                <option value="web">Web</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Brief description of this role's purpose"></textarea>
                </div>

                <!-- Permissions -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-info">Assign Permissions</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Dashboard Permissions -->
                            <div class="col-md-6">
                                <h6>Dashboard</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-dashboard" name="permissions[]" value="view-dashboard">
                                    <label class="form-check-label" for="view-dashboard">View Dashboard</label>
                                </div>
                            </div>

                            <!-- Services Permissions -->
                            <div class="col-md-6">
                                <h6>Services</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-services" name="permissions[]" value="view-services">
                                    <label class="form-check-label" for="view-services">View Services</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="create-services" name="permissions[]" value="create-services">
                                    <label class="form-check-label" for="create-services">Create Services</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="edit-services" name="permissions[]" value="edit-services">
                                    <label class="form-check-label" for="edit-services">Edit Services</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="delete-services" name="permissions[]" value="delete-services">
                                    <label class="form-check-label" for="delete-services">Delete Services</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <!-- Projects Permissions -->
                            <div class="col-md-6">
                                <h6>Projects</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-projects" name="permissions[]" value="view-projects">
                                    <label class="form-check-label" for="view-projects">View Projects</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="create-projects" name="permissions[]" value="create-projects">
                                    <label class="form-check-label" for="create-projects">Create Projects</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="edit-projects" name="permissions[]" value="edit-projects">
                                    <label class="form-check-label" for="edit-projects">Edit Projects</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="delete-projects" name="permissions[]" value="delete-projects">
                                    <label class="form-check-label" for="delete-projects">Delete Projects</label>
                                </div>
                            </div>

                            <!-- Blogs Permissions -->
                            <div class="col-md-6">
                                <h6>Blogs</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-blogs" name="permissions[]" value="view-blogs">
                                    <label class="form-check-label" for="view-blogs">View Blogs</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="create-blogs" name="permissions[]" value="create-blogs">
                                    <label class="form-check-label" for="create-blogs">Create Blogs</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="edit-blogs" name="permissions[]" value="edit-blogs">
                                    <label class="form-check-label" for="edit-blogs">Edit Blogs</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="delete-blogs" name="permissions[]" value="delete-blogs">
                                    <label class="form-check-label" for="delete-blogs">Delete Blogs</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <!-- Settings Permissions -->
                            <div class="col-md-6">
                                <h6>Settings</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-settings" name="permissions[]" value="view-settings">
                                    <label class="form-check-label" for="view-settings">View Settings</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="edit-settings" name="permissions[]" value="edit-settings">
                                    <label class="form-check-label" for="edit-settings">Edit Settings</label>
                                </div>
                            </div>

                            <!-- Admin Users Permissions -->
                            <div class="col-md-6">
                                <h6>Admin Users</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="view-admins" name="permissions[]" value="view-admins">
                                    <label class="form-check-label" for="view-admins">View Admin Users</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="create-admins" name="permissions[]" value="create-admins">
                                    <label class="form-check-label" for="create-admins">Create Admin Users</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="edit-admins" name="permissions[]" value="edit-admins">
                                    <label class="form-check-label" for="edit-admins">Edit Admin Users</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="delete-admins" name="permissions[]" value="delete-admins">
                                    <label class="form-check-label" for="delete-admins">Delete Admin Users</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Role
                    </button>
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
