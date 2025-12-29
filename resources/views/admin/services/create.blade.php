@extends('admin.layouts.app')

@section('title', 'Create Service')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Create New Service</h1>
            <p class="text-muted">Add a new service with English and Arabic translations</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Services
            </a>
        </div>
    </div>

    <!-- Service Form -->
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
            <!-- Main Information -->
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-globe"></i> English Translation
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_en">Service Name (English) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_en') is-invalid @enderror" 
                                   id="name_en" name="name_en" value="{{ old('name_en') }}" required>
                            @error('name_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_description_en">Short Description (English) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('short_description_en') is-invalid @enderror" 
                                      id="short_description_en" name="short_description_en" rows="3" required>{{ old('short_description_en') }}</textarea>
                            <small class="form-text text-muted">Maximum 500 characters</small>
                            @error('short_description_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="long_description_en">Long Description (English)</label>
                            <textarea class="form-control @error('long_description_en') is-invalid @enderror" 
                                      id="long_description_en" name="long_description_en" rows="6">{{ old('long_description_en') }}</textarea>
                            @error('long_description_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <i class="fas fa-globe"></i> Arabic Translation
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_ar">Service Name (Arabic) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_ar') is-invalid @enderror" 
                                   id="name_ar" name="name_ar" value="{{ old('name_ar') }}" required dir="rtl">
                            @error('name_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_description_ar">Short Description (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('short_description_ar') is-invalid @enderror" 
                                      id="short_description_ar" name="short_description_ar" rows="3" required dir="rtl">{{ old('short_description_ar') }}</textarea>
                            <small class="form-text text-muted">Maximum 500 characters</small>
                            @error('short_description_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="long_description_ar">Long Description (Arabic)</label>
                            <textarea class="form-control @error('long_description_ar') is-invalid @enderror" 
                                      id="long_description_ar" name="long_description_ar" rows="6" dir="rtl">{{ old('long_description_ar') }}</textarea>
                            @error('long_description_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Service Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="slug">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                   id="slug" name="slug" value="{{ old('slug') }}" required>
                            <small class="form-text text-muted">URL-friendly name (e.g., it-management)</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', 0) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon_path">Service Icon</label>
                            <input type="file" class="form-control-file @error('icon_path') is-invalid @enderror" 
                                   id="icon_path" name="icon_path" accept="image/*">
                            <small class="form-text text-muted">Recommended: SVG, PNG (max 2MB)</small>
                            @error('icon_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image_path">Service Image</label>
                            <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" 
                                   id="image_path" name="image_path" accept="image/*">
                            <small class="form-text text-muted">Recommended: JPG, PNG (max 5MB) - Used as thumbnail</small>
                            @error('image_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_featured" 
                                       name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_featured">
                                    <i class="fas fa-star text-warning"></i> Featured Service
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" 
                                       name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Create Service
                        </button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary btn-block">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    // Auto-generate slug from English name
    document.getElementById('name_en').addEventListener('input', function() {
        const slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    });

    // Preview image before upload
    document.getElementById('icon_path').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // You can add image preview here if needed
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
@endpush
@endsection
