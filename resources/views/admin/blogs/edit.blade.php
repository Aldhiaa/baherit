@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Blog Post</h1>
        <a href="{{ route('admin.blogs.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Blogs
        </a>
    </div>

    <!-- Edit Blog Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Post Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="slug">Blog Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" required>
                            <small class="form-text text-muted">URL-friendly version (required)</small>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="author_name">Author</label>
                            <input type="text" class="form-control @error('author_name') is-invalid @enderror" id="author_name" name="author_name" value="{{ old('author_name', $blog->author_name) }}">
                            @error('author_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                @foreach($statusOptions as $value => $label)
                                    <option value="{{ $value }}" {{ old('status', $blog->status) === $value ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="published_at">Publish Date</label>
                            <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}">
                            @error('published_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="read_time_minutes">Reading Time (minutes)</label>
                            <input type="number" class="form-control @error('read_time_minutes') is-invalid @enderror" id="read_time_minutes" name="read_time_minutes" min="1" value="{{ old('read_time_minutes', $blog->read_time_minutes ?? 5) }}">
                            @error('read_time_minutes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" class="form-control-file @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image" accept="image/*">
                            <small class="form-text text-muted">Leave empty to keep current image</small>
                            @if($blog->featured_image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Current image" style="max-width: 150px; border-radius: 4px;">
                                </div>
                            @endif
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="is_featured">Featured Post</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $blog->is_featured) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_featured">Mark as Featured</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- English Translation -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-info">English Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_en">Title (English) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en" name="title_en" value="{{ old('title_en', $enTranslation->title ?? '') }}" required>
                            @error('title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="excerpt_en">Excerpt (English) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('excerpt_en') is-invalid @enderror" id="excerpt_en" name="excerpt_en" rows="3" required>{{ old('excerpt_en', $enTranslation->excerpt ?? '') }}</textarea>
                            @error('excerpt_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content_en">Content (English) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content_en') is-invalid @enderror" id="content_en" name="content_en" rows="10" required>{{ old('content_en', $enTranslation->content ?? '') }}</textarea>
                            @error('content_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Arabic Translation -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-warning">Arabic Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_ar">Title (Arabic) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar" name="title_ar" dir="rtl" value="{{ old('title_ar', $arTranslation->title ?? '') }}" required>
                            @error('title_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="excerpt_ar">Excerpt (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('excerpt_ar') is-invalid @enderror" id="excerpt_ar" name="excerpt_ar" rows="3" dir="rtl" required>{{ old('excerpt_ar', $arTranslation->excerpt ?? '') }}</textarea>
                            @error('excerpt_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content_ar">Content (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('content_ar') is-invalid @enderror" id="content_ar" name="content_ar" rows="10" dir="rtl" required>{{ old('content_ar', $arTranslation->content ?? '') }}</textarea>
                            @error('content_ar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Blog Post
                    </button>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
