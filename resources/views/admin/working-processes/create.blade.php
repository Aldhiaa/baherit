@extends('admin.layouts.app')

@section('title', 'Create Working Process')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Create Working Process</h1>
            <p class="text-muted">Add a new working process step</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.working-processes.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <!-- Create Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Working Process Information</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.working-processes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <!-- Icon Upload -->
                        <div class="form-group">
                            <label for="icon_path">Icon <small class="text-muted">(Optional)</small></label>
                            <input type="file" class="form-control-file @error('icon_path') is-invalid @enderror" 
                                   id="icon_path" name="icon_path" accept="image/*">
                            @error('icon_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Supported formats: JPEG, PNG, JPG, GIF, SVG. Max size: 2MB</small>
                            
                            <!-- Icon Preview -->
                            <div id="icon-preview" class="mt-2" style="display: none;">
                                <img id="icon-preview-img" src="" alt="Icon Preview" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                            </div>
                        </div>

                        <!-- Number Tag Upload -->
                        <div class="form-group">
                            <label for="number_tag_path">Number Tag <small class="text-muted">(Optional)</small></label>
                            <input type="file" class="form-control-file @error('number_tag_path') is-invalid @enderror" 
                                   id="number_tag_path" name="number_tag_path" accept="image/*">
                            @error('number_tag_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Supported formats: JPEG, PNG, JPG, GIF, SVG. Max size: 2MB</small>
                            
                            <!-- Number Tag Preview -->
                            <div id="tag-preview" class="mt-2" style="display: none;">
                                <img id="tag-preview-img" src="" alt="Tag Preview" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                            </div>
                        </div>

                        <!-- Display Order -->
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control @error('display_order') is-invalid @enderror" 
                                   id="display_order" name="display_order" value="{{ old('display_order', 0) }}" min="0">
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <!-- English Translation -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">English Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title_en">Title (English) *</label>
                                    <input type="text" class="form-control @error('title_en') is-invalid @enderror" 
                                           id="title_en" name="title_en" value="{{ old('title_en') }}" required>
                                    @error('title_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description_en">Description (English) *</label>
                                    <textarea class="form-control @error('description_en') is-invalid @enderror" 
                                              id="description_en" name="description_en" rows="4" required>{{ old('description_en') }}</textarea>
                                    @error('description_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Arabic Translation -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h6 class="mb-0">Arabic Content</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title_ar">Title (Arabic) *</label>
                                    <input type="text" class="form-control @error('title_ar') is-invalid @enderror" 
                                           id="title_ar" name="title_ar" value="{{ old('title_ar') }}" required dir="rtl">
                                    @error('title_ar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description_ar">Description (Arabic) *</label>
                                    <textarea class="form-control @error('description_ar') is-invalid @enderror" 
                                              id="description_ar" name="description_ar" rows="4" required dir="rtl">{{ old('description_ar') }}</textarea>
                                    @error('description_ar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="form-group text-right">
                    <a href="{{ route('admin.working-processes.index') }}" class="btn btn-secondary mr-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Working Process
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Icon preview
document.getElementById('icon_path').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('icon-preview-img').src = e.target.result;
            document.getElementById('icon-preview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        document.getElementById('icon-preview').style.display = 'none';
    }
});

// Number tag preview
document.getElementById('number_tag_path').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('tag-preview-img').src = e.target.result;
            document.getElementById('tag-preview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        document.getElementById('tag-preview').style.display = 'none';
    }
});
</script>
@endpush
@endsection
