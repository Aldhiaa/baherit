@extends('admin.layouts.app')

@section('title', 'Testimonials Management')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Testimonials Management</h1>
            <p class="text-muted">Manage customer testimonials with multilingual support</p>
        </div>
        <div class="col-md-6 text-right">
            @can('create-testimonials')
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Testimonial
            </a>
            @endcan
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.testimonials.index') }}" class="form-inline">
                <div class="form-group mr-3 mb-2">
                    <input type="text" name="search" class="form-control" placeholder="Search testimonials..." value="{{ request('search') }}">
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
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary mb-2">
                    <i class="fas fa-redo"></i> Reset
                </a>
            </form>
        </div>
    </div>

    <!-- Testimonials Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Testimonials ({{ $testimonials->total() }})</h6>
        </div>
        <div class="card-body">
            @if($testimonials->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th width="80">Avatar</th>
                            <th>Author (EN)</th>
                            <th>Author (AR)</th>
                            <th width="120">Rating</th>
                            <th width="100">Order</th>
                            <th width="100">Status</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        @php
                            $enTranslation = $testimonial->translations->where('locale', 'en')->first();
                            $arTranslation = $testimonial->translations->where('locale', 'ar')->first();
                        @endphp
                        <tr>
                            <td class="text-center">
                                @if($testimonial->avatar_path)
                                    <img src="{{ asset('storage/' . $testimonial->avatar_path) }}" alt="Avatar" 
                                         style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                @else
                                    <div style="width: 50px; height: 50px; border-radius: 50%; background: #e9ecef; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-user fa-lg text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $enTranslation->author_name ?? 'N/A' }}</strong>
                                <br>
                                <small class="text-muted">{{ $enTranslation->author_title ?? '' }}</small>
                                <br>
                                <small class="text-secondary">{{ Str::limit($enTranslation->quote ?? '', 60) }}</small>
                            </td>
                            <td dir="rtl">
                                <strong>{{ $arTranslation->author_name ?? 'N/A' }}</strong>
                                <br>
                                <small class="text-muted">{{ $arTranslation->author_title ?? '' }}</small>
                                <br>
                                <small class="text-secondary">{{ Str::limit($arTranslation->quote ?? '', 60) }}</small>
                            </td>
                            <td class="text-center">
                                <div>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                    @endfor
                                </div>
                                <small class="text-muted">({{ $testimonial->rating }}/5)</small>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-secondary">{{ $testimonial->display_order }}</span>
                            </td>
                            <td class="text-center">
                                @if($testimonial->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    @can('edit-testimonials')
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-info" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan
                                    
                                    @can('delete-testimonials')
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
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
                {{ $testimonials->links() }}
            </div>
            @else
            <div class="text-center py-5">
                <i class="fas fa-comments fa-3x text-muted mb-3"></i>
                <p class="text-muted">No testimonials found.</p>
                @can('create-testimonials')
                <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Your First Testimonial
                </a>
                @endcan
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
