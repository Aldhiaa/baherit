@extends('admin.layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">Customers</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Edit Customer: {{ $customer->name }}</h1>
        </div>
    </div>

    <!-- Form Card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.customers.update', $customer) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <!-- Customer Name -->
                        <div class="form-group">
                            <label for="name">Customer/Company Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name', $customer->name) }}" 
                                   placeholder="Enter customer name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Current Logo -->
                        <div class="form-group">
                            <label>Current Logo</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $customer->logo_path) }}" alt="{{ $customer->name }}" 
                                     style="max-width: 200px; max-height: 100px;" class="border p-2 rounded bg-light">
                            </div>
                        </div>

                        <!-- Logo Upload -->
                        <div class="form-group">
                            <label for="logo_path">Replace Logo (Optional)</label>
                            <input type="file" class="form-control-file @error('logo_path') is-invalid @enderror" 
                                   id="logo_path" name="logo_path" accept="image/*">
                            <small class="form-text text-muted">Leave empty to keep current logo. Recommended: PNG/SVG with transparent background, max 2MB</small>
                            @error('logo_path')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div id="logo-preview" class="mt-2"></div>
                        </div>

                        <!-- Website URL -->
                        <div class="form-group">
                            <label for="website_url">Website URL (Optional)</label>
                            <input type="url" class="form-control @error('website_url') is-invalid @enderror" 
                                   id="website_url" name="website_url" value="{{ old('website_url', $customer->website_url) }}" 
                                   placeholder="https://example.com">
                            @error('website_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Display Order -->
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', $customer->display_order) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $customer->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Active (show on website)</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Customer
                    </button>
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Logo preview
    document.getElementById('logo_path').addEventListener('change', function(e) {
        const preview = document.getElementById('logo-preview');
        preview.innerHTML = '';
        
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '200px';
                img.style.maxHeight = '100px';
                img.className = 'border p-2 rounded bg-light';
                preview.appendChild(img);
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
@endpush
@endsection
