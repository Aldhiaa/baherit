@extends('admin.layouts.app')

@section('title', 'Create Counter')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Create New Counter</h1>
            <p class="text-muted">Add a new statistic block for the homepage counters section</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.counters.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Counters
            </a>
        </div>
    </div>

    <form action="{{ route('admin.counters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-language"></i> English Translation</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="label_en">Label (English) <span class="text-danger">*</span></label>
                            <input type="text" name="label_en" id="label_en" class="form-control @error('label_en') is-invalid @enderror" value="{{ old('label_en') }}" required>
                            @error('label_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-language"></i> Arabic Translation</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="label_ar">Label (Arabic) <span class="text-danger">*</span></label>
                            <input type="text" name="label_ar" id="label_ar" class="form-control @error('label_ar') is-invalid @enderror" value="{{ old('label_ar') }}" dir="rtl" required>
                            @error('label_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Counter Settings</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="key">Identifier Key <span class="text-danger">*</span></label>
                            <input type="text" name="key" id="key" class="form-control @error('key') is-invalid @enderror" value="{{ old('key') }}" required>
                            <small class="form-text text-muted">Unique key used for programmatic reference.</small>
                            @error('key')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="target_value">Target Value <span class="text-danger">*</span></label>
                            <input type="number" name="target_value" id="target_value" class="form-control @error('target_value') is-invalid @enderror" value="{{ old('target_value') }}" min="0" required>
                            <small class="form-text text-muted">Displayed numeric value (e.g. 950).</small>
                            @error('target_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" name="display_order" id="display_order" class="form-control @error('display_order') is-invalid @enderror" value="{{ old('display_order', 0) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first.</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">Icon Image</label>
                            <input type="file" name="icon" id="icon" class="form-control-file @error('icon') is-invalid @enderror" accept="image/*">
                            <small class="form-text text-muted">Optional icon (SVG/PNG, max 2MB).</small>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Create Counter
                        </button>
                        <a href="{{ route('admin.counters.index') }}" class="btn btn-secondary btn-block">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
