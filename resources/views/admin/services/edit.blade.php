@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Edit Service</h1>
            <p class="text-muted">Update service information and translations</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Services
            </a>
        </div>
    </div>

    <!-- Service Form -->
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
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
                                   id="name_en" name="name_en" value="{{ old('name_en', $enTranslation->name ?? '') }}" required>
                            @error('name_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_description_en">Short Description (English) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('short_description_en') is-invalid @enderror" 
                                      id="short_description_en" name="short_description_en" rows="3" required>{{ old('short_description_en', $enTranslation->short_description ?? '') }}</textarea>
                            <small class="form-text text-muted">Maximum 500 characters</small>
                            @error('short_description_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="long_description_en">Long Description (English)</label>
                            <textarea class="form-control @error('long_description_en') is-invalid @enderror" 
                                      id="long_description_en" name="long_description_en" rows="6">{{ old('long_description_en', $enTranslation->long_description ?? '') }}</textarea>
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
                                   id="name_ar" name="name_ar" value="{{ old('name_ar', $arTranslation->name ?? '') }}" required dir="rtl">
                            @error('name_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_description_ar">Short Description (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('short_description_ar') is-invalid @enderror" 
                                      id="short_description_ar" name="short_description_ar" rows="3" required dir="rtl">{{ old('short_description_ar', $arTranslation->short_description ?? '') }}</textarea>
                            <small class="form-text text-muted">Maximum 500 characters</small>
                            @error('short_description_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="long_description_ar">Long Description (Arabic)</label>
                            <textarea class="form-control @error('long_description_ar') is-invalid @enderror" 
                                      id="long_description_ar" name="long_description_ar" rows="6" dir="rtl">{{ old('long_description_ar', $arTranslation->long_description ?? '') }}</textarea>
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
                                   id="slug" name="slug" value="{{ old('slug', $service->slug) }}" required>
                            <small class="form-text text-muted">URL-friendly name (e.g., it-management)</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', $service->display_order) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon_path">Service Icon</label>
                            @if($service->icon_path)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $service->icon_path) }}" alt="Current Icon" 
                                         style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                                    <p class="text-muted small mb-0">Current Icon</p>
                                </div>
                            @endif
                            <input type="file" class="form-control-file @error('icon_path') is-invalid @enderror" 
                                   id="icon_path" name="icon_path" accept="image/*">
                            <small class="form-text text-muted">Recommended: SVG, PNG (max 2MB). Leave empty to keep current icon.</small>
                            @error('icon_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_featured" 
                                       name="is_featured" value="1" {{ old('is_featured', $service->is_featured) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_featured">
                                    <i class="fas fa-star text-warning"></i> Featured Service
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" 
                                       name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
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
                            <i class="fas fa-save"></i> Update Service
                        </button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary btn-block">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                        @can('delete-services')
                        <hr>
                        <button type="button" class="btn btn-danger btn-block" onclick="if(confirm('Are you sure you want to delete this service?')) { document.getElementById('delete-form').submit(); }">
                            <i class="fas fa-trash"></i> Delete Service
                        </button>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </form>

    @can('delete-services')
    <form id="delete-form" action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
    @endcan
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
</script>
@endpush
@endsection
