@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Edit Testimonial</h1>
            <p class="text-muted">Update testimonial information and translations</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Testimonials
            </a>
        </div>
    </div>

    <!-- Testimonial Form -->
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="author_name_en">Author Name (English) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('author_name_en') is-invalid @enderror" 
                                   id="author_name_en" name="author_name_en" value="{{ old('author_name_en', $enTranslation->author_name ?? '') }}" required>
                            @error('author_name_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="author_title_en">Author Title/Position (English) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('author_title_en') is-invalid @enderror" 
                                   id="author_title_en" name="author_title_en" value="{{ old('author_title_en', $enTranslation->author_title ?? '') }}" required>
                            @error('author_title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quote_en">Testimonial Quote (English) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('quote_en') is-invalid @enderror" 
                                      id="quote_en" name="quote_en" rows="5" required>{{ old('quote_en', $enTranslation->quote ?? '') }}</textarea>
                            @error('quote_en')
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
                            <label for="author_name_ar">Author Name (Arabic) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('author_name_ar') is-invalid @enderror" 
                                   id="author_name_ar" name="author_name_ar" value="{{ old('author_name_ar', $arTranslation->author_name ?? '') }}" required dir="rtl">
                            @error('author_name_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="author_title_ar">Author Title/Position (Arabic) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('author_title_ar') is-invalid @enderror" 
                                   id="author_title_ar" name="author_title_ar" value="{{ old('author_title_ar', $arTranslation->author_title ?? '') }}" required dir="rtl">
                            @error('author_title_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quote_ar">Testimonial Quote (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('quote_ar') is-invalid @enderror" 
                                      id="quote_ar" name="quote_ar" rows="5" required dir="rtl">{{ old('quote_ar', $arTranslation->quote ?? '') }}</textarea>
                            @error('quote_ar')
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
                        <h6 class="m-0 font-weight-bold text-primary">Testimonial Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="avatar_path">Author Avatar</label>
                            @if($testimonial->avatar_path)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $testimonial->avatar_path) }}" alt="Current Avatar" 
                                         style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                                    <p class="text-muted small mb-0">Current Avatar</p>
                                </div>
                            @endif
                            <input type="file" class="form-control-file @error('avatar_path') is-invalid @enderror" 
                                   id="avatar_path" name="avatar_path" accept="image/*">
                            <small class="form-text text-muted">Recommended: Square image, JPG/PNG (max 2MB). Leave empty to keep current avatar.</small>
                            @error('avatar_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div id="avatar-preview" class="mt-2" style="display: none;">
                                <img id="preview-image" src="" alt="Preview" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rating">Rating <span class="text-danger">*</span></label>
                            <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" required>
                                <option value="">Select Rating</option>
                                <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ (5 Stars)</option>
                                <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ (4 Stars)</option>
                                <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>⭐⭐⭐ (3 Stars)</option>
                                <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>⭐⭐ (2 Stars)</option>
                                <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>⭐ (1 Star)</option>
                            </select>
                            @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', $testimonial->display_order) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" 
                                       name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">
                                    Active (Show on website)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Update Testimonial
                        </button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary btn-block">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                        @can('delete-testimonials')
                        <hr>
                        <button type="button" class="btn btn-danger btn-block" onclick="if(confirm('Are you sure you want to delete this testimonial?')) { document.getElementById('delete-form').submit(); }">
                            <i class="fas fa-trash"></i> Delete Testimonial
                        </button>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </form>

    @can('delete-testimonials')
    <form id="delete-form" action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
    @endcan
</div>

@push('scripts')
<script>
    // Preview avatar before upload
    document.getElementById('avatar_path').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
                document.getElementById('avatar-preview').style.display = 'block';
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
@endpush
@endsection
