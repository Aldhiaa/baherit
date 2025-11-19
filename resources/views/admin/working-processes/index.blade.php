@extends('admin.layouts.app')

@section('title', 'Working Processes Management')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Working Processes Management</h1>
            <p class="text-muted">Manage working process steps with multilingual support</p>
        </div>
        <div class="col-md-6 text-right">
            @can('create-working-processes')
            <a href="{{ route('admin.working-processes.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Working Process
            </a>
            @endcan
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.working-processes.index') }}" class="form-inline">
                <div class="form-group mr-3 mb-2">
                    <input type="text" name="search" class="form-control" placeholder="Search working processes..." value="{{ request('search') }}">
                </div>
                <div class="form-group mr-3 mb-2">
                    <select name="status" class="form-control">
                        <option value="">All Status</option>
                        <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mr-2">
                    <i class="fas fa-search"></i> Search
                </button>
                <a href="{{ route('admin.working-processes.index') }}" class="btn btn-secondary mb-2">
                    <i class="fas fa-redo"></i> Reset
                </a>
            </form>
        </div>
    </div>

    <!-- Working Processes Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Working Processes ({{ $workingProcesses->total() }})</h6>
        </div>
        <div class="card-body">
            @if($workingProcesses->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title (EN)</th>
                            <th>Title (AR)</th>
                            <th>Display Order</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workingProcesses as $workingProcess)
                        @php
                            $enTranslation = $workingProcess->translations->where('locale', 'en')->first();
                            $arTranslation = $workingProcess->translations->where('locale', 'ar')->first();
                        @endphp
                        <tr>
                            <td>
                                @if($workingProcess->icon_path)
                                    <img src="{{ asset('storage/' . $workingProcess->icon_path) }}" 
                                         alt="Icon" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <span class="text-muted">No icon</span>
                                @endif
                            </td>
                            <td>{{ $enTranslation->title ?? 'N/A' }}</td>
                            <td>{{ $arTranslation->title ?? 'N/A' }}</td>
                            <td>
                                <span class="badge badge-info">{{ $workingProcess->display_order }}</span>
                            </td>
                            <td>
                                @if($workingProcess->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>{{ $workingProcess->created_at->format('M d, Y') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    @can('edit-working-processes')
                                    <a href="{{ route('admin.working-processes.edit', $workingProcess) }}" 
                                       class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan
                                    
                                    @can('delete-working-processes')
                                    <form action="{{ route('admin.working-processes.destroy', $workingProcess) }}" 
                                          method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure you want to delete this working process?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $workingProcesses->appends(request()->query())->links() }}
            </div>
            @else
            <div class="text-center py-4">
                <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No Working Processes Found</h5>
                <p class="text-muted">Start by creating your first working process step.</p>
                @can('create-working-processes')
                <a href="{{ route('admin.working-processes.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Working Process
                </a>
                @endcan
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
