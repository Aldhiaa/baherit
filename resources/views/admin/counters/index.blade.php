@extends('admin.layouts.app')

@section('title', 'Counters Management')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Counters Management</h1>
            <p class="text-muted">Manage homepage statistics with multilingual labels and ordering</p>
        </div>
        <div class="col-md-6 text-right">
            @can('create-counters')
            <a href="{{ route('admin.counters.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Counter
            </a>
            @endcan
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.counters.index') }}" class="form-inline">
                <div class="form-group mr-3 mb-2">
                    <input type="text" name="search" class="form-control" placeholder="Search counters..." value="{{ request('search') }}">
                </div>
                <div class="form-group mr-3 mb-2">
                    <select name="status" class="form-control">
                        <option value="">All Status</option>
                        <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mr-2">
                    <i class="fas fa-search"></i> Search
                </button>
                <a href="{{ route('admin.counters.index') }}" class="btn btn-secondary mb-2">
                    <i class="fas fa-redo"></i> Reset
                </a>
            </form>
        </div>
    </div>

    <!-- Counters Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Counters ({{ $counters->total() }})</h6>
        </div>
        <div class="card-body">
            @if($counters->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th width="80">Icon</th>
                            <th>Label (EN)</th>
                            <th>Label (AR)</th>
                            <th>Key</th>
                            <th class="text-right" width="120">Target Value</th>
                            <th class="text-center" width="120">Display Order</th>
                            <th class="text-center" width="100">Status</th>
                            <th class="text-center" width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($counters as $counter)
                        @php
                            $en = $counter->translations->firstWhere('locale', 'en');
                            $ar = $counter->translations->firstWhere('locale', 'ar');
                        @endphp
                        <tr>
                            <td class="text-center">
                                @if($counter->icon_path)
                                    <img src="{{ asset('storage/' . $counter->icon_path) }}" alt="{{ $en->label ?? $counter->key }}" class="img-fluid" style="max-height: 40px;">
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td>{{ $en->label ?? '—' }}</td>
                            <td dir="rtl">{{ $ar->label ?? '—' }}</td>
                            <td><code>{{ $counter->key }}</code></td>
                            <td class="text-right">{{ number_format($counter->target_value) }}</td>
                            <td class="text-center">{{ $counter->display_order }}</td>
                            <td class="text-center">
                                @if($counter->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @can('edit-counters')
                                <a href="{{ route('admin.counters.edit', $counter) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan

                                @can('delete-counters')
                                <form action="{{ route('admin.counters.destroy', $counter) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this counter?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $counters->links() }}
            </div>
            @else
            <div class="text-center py-5">
                <img src="{{ asset('assets/images/illustrations/empty-state.svg') }}" alt="No counters" class="mb-4" style="max-width: 220px;">
                <h5>No counters found</h5>
                <p class="text-muted">Start by creating your first counter to display statistics on the homepage.</p>
                @can('create-counters')
                <a href="{{ route('admin.counters.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create Counter
                </a>
                @endcan
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
