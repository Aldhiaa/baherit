@extends('admin.layouts.app')

@section('title', 'FAQ Categories')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">FAQ Categories</h1>
            <p class="text-muted">Organize FAQs into multilingual categories</p>
        </div>
        <div class="col-md-6 text-right">
            @can('create-faqs')
            <a href="{{ route('admin.faq-categories.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Category
            </a>
            @endcan
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.faq-categories.index') }}" class="form-inline">
                <div class="form-group mr-3 mb-2">
                    <input type="text" name="search" class="form-control" placeholder="Search categories..." value="{{ request('search') }}">
                </div>
                <div class="form-group mr-3 mb-2">
                    <select name="status" class="form-control">
                        <option value="">All Status</option>
                        <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mr-2">
                    <i class="fas fa-search"></i> Search
                </button>
                <a href="{{ route('admin.faq-categories.index') }}" class="btn btn-secondary mb-2">
                    <i class="fas fa-redo"></i> Reset
                </a>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Categories ({{ $categories->total() }})</h6>
        </div>
        <div class="card-body">
            @if($categories->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Name (EN)</th>
                            <th>Name (AR)</th>
                            <th width="120">Order</th>
                            <th width="120">Status</th>
                            <th width="160">FAQs Count</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        @php
                            $en = $category->translations->firstWhere('locale', 'en');
                            $ar = $category->translations->firstWhere('locale', 'ar');
                        @endphp
                        <tr>
                            <td>
                                <strong>{{ $en->name ?? 'N/A' }}</strong>
                            </td>
                            <td>
                                <strong dir="rtl">{{ $ar->name ?? 'غير متوفر' }}</strong>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-secondary">{{ $category->display_order }}</span>
                            </td>
                            <td class="text-center">
                                @if($category->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <span class="badge badge-info">{{ $category->faqs_count }}</span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    @can('edit-faqs')
                                    <a href="{{ route('admin.faq-categories.edit', $category) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @endcan

                                    @can('delete-faqs')
                                    <form action="{{ route('admin.faq-categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this category? FAQs inside will also be removed.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
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

            <div class="mt-3">
                {{ $categories->links() }}
            </div>
            @else
            <div class="text-center py-5">
                <i class="fas fa-question-circle fa-3x text-muted mb-3"></i>
                <p class="text-muted">No FAQ categories found.</p>
                @can('create-faqs')
                <a href="{{ route('admin.faq-categories.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Category
                </a>
                @endcan
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
