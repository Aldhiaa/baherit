@extends('admin.layouts.app')

@section('title', 'Projects Management')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Projects Management</h1>
        @can('create-projects', 'admin')
        <a href="{{ route('admin.projects.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add New Project
        </a>
        @endcan
    </div>

    <!-- Projects Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Featured</th>
                            <th>Completion Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                @if($project->featured_image)
                                    <img src="{{ Storage::url($project->featured_image) }}" alt="{{ $project->translation->title ?? 'N/A' }}" width="50">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $project->translation->title ?? 'N/A' }}</td>
                            <td>
                                @if($project->status === 'published')
                                    <span class="badge badge-success">Published</span>
                                @else
                                    <span class="badge badge-secondary">{{ ucfirst($project->status ?? 'Draft') }}</span>
                                @endif
                            </td>
                            <td>
                                @if($project->is_featured)
                                    <span class="badge badge-warning">Featured</span>
                                @else
                                    <span class="badge badge-secondary">Standard</span>
                                @endif
                            </td>
                            <td>{{ optional($project->completion_date)->format('Y-m-d') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                <div class="mb-3">
                                    <i class="fas fa-folder-open fa-3x text-gray-300"></i>
                                </div>
                                <h5>No projects found</h5>
                                @can('create-projects', 'admin')
                                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm mt-2">
                                    <i class="fas fa-plus"></i> Create your first project
                                </a>
                                @endcan
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    @if($projects->hasPages())
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                {{ $projects->links() }}
                            </td>
                        </tr>
                    </tfoot>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
