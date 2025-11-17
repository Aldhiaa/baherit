@extends('admin.layouts.app')

@section('title', 'Edit Counter')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-0">Edit Counter</h1>
            <p class="text-muted">Update the statistic block displayed on the homepage counters section</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.counters.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Counters
            </a>
        </div>
    </div>

    <form action="{{ route('admin.counters.update', $counter) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-language"></i> English Translation</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="label_en">Label (English) <span class="text-danger">*</span></label>
                            <input type="text" name="label_en" id="label_en" class="form-control @error('label_en') is-invalid @enderror" value="{{ old('label_en', optional($enTranslation)->label) }}" required>
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
                            <input type="text" name="label_ar" id="label_ar" class="form-control @error('label_ar') is-invalid @enderror" value="{{ old('label_ar', optional($arTranslation)->label) }}" dir="rtl" required>
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
                            <input type="text" name="key" id="key" class="form-control @error('key') is-invalid @enderror" value="{{ old('key', $counter->key) }}" required>
                            <small class="form-text text-muted">Unique key used for programmatic reference.</small>
                            @error('key')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="target_value">Target Value <span class="text-danger">*</span></label>
                            <input type="number" name="target_value" id="target_value" class="form-control @error('target_value') is-invalid @enderror" value="{{ old('target_value', $counter->target_value) }}" min="0" required>
                            <small class="form-text text-muted">Displayed numeric value.</small>
                            @error('target_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" name="display_order" id="display_order" class="form-control @error('display_order') is-invalid @enderror" value="{{ old('display_order', $counter->display_order) }}" min="0">
                            <small class="form-text text-muted">Lower numbers appear first.</small>
                            @error('display_order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">Icon Image</label>
                            <input type="file" name="icon" id="icon" class="form-control-file @error('icon') is-invalid @enderror" accept="image/*">
                            <small class="form-text text-muted">Uploading a new file will replace the existing icon.</small>
                            @error('icon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @if($counter->icon_path)
                                <div class="mt-3">
                                    <p class="text-muted mb-1">Current icon:</p>
                                    <img src="{{ asset('storage/' . $counter->icon_path) }}" alt="{{ optional($enTranslation)->label ?? $counter->key }}" class="img-fluid border p-2" style="max-height: 80px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $counter->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-save"></i> Update Counter
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
