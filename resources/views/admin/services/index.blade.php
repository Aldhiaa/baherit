@extends('admin.layouts.app')

@section('title', 'Services Management')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Services Management</h1>
            <p class="text-muted">Manage all your services with multilingual support</p>
        </div>
        <div class="col-md-6 text-right">
            @can('create-services')
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Service
            </a>
            @endcan
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.services.index') }}" class="form-inline">
                <div class="form-group mr-3 mb-2">
                    <input type="text" name="search" class="form-control" placeholder="Search services..." value="{{ request('search') }}">
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
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary mb-2">
                    <i class="fas fa-redo"></i> Reset
                </a>
            </form>
        </div>
    </div>

    <!-- Services Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Services ({{ $services->total() }})</h6>
        </div>
        <div class="card-body">
            @if($services->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th width="60">Icon</th>
                            <th>Name (EN)</th>
                            <th>Name (AR)</th>
                            <th>Slug</th>
                            <th width="100">Order</th>
                            <th width="100">Featured</th>
                            <th width="100">Status</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        @php
                            $enTranslation = $service->translations->where('locale', 'en')->first();
                            $arTranslation = $service->translations->where('locale', 'ar')->first();
                        @endphp
                        <tr>
                            <td class="text-center">
                                @if($service->icon_path)
                                    <img src="{{ asset('storage/' . $service->icon_path) }}" alt="Icon" style="width: 40px; height: 40px; object-fit: cover; border-radius: 5px;">
                                @else
                                    <i class="fas fa-cogs fa-2x text-muted"></i>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $enTranslation->name ?? 'N/A' }}</strong>
                                <br>
                                <small class="text-muted">{{ Str::limit($enTranslation->short_description ?? '', 50) }}</small>
                            </td>
                            <td>
                                <strong>{{ $arTranslation->name ?? 'N/A' }}</strong>
                                <br>
                                <small class="text-muted">{{ Str::limit($arTranslation->short_description ?? '', 50) }}</small>
                            </td>
                            <td>
                                <code>{{ $service->slug }}</code>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-secondary">{{ $service->display_order }}</span>
                            </td>
                            <td class="text-center">
                                @if($service->is_featured)
                                    <span class="badge badge-warning">
                                        <i class="fas fa-star"></i> Featured
                                    </span>
                                @else
                                    <span class="badge badge-light">No</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($service->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    @can('edit-services')
                                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-info" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan
                                    
                                    @can('delete-services')
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
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
            <div class="mt-3">
                {{ $services->links() }}
            </div>
            @else
            <div class="text-center py-5">
                <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                <p class="text-muted">No services found.</p>
                @can('create-services')
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Your First Service
                </a>
                @endcan
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
