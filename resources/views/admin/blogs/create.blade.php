@extends('admin.layouts.app')

@section('title', 'Create Blog Post')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Blog Post</h1>
        <a href="{{ route('admin.blogs.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Blogs
        </a>
    </div>

    <!-- Create Blog Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Post Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="slug">Blog Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug" required>
                            <small class="form-text text-muted">URL-friendly version (required, e.g. my-blog-post)</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="author_name">Author</label>
                            <input type="text" class="form-control" id="author_name" name="author_name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="draft">Draft</option>
                                <option value="published" selected>Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="published_at">Publish Date</label>
                            <input type="datetime-local" class="form-control" id="published_at" name="published_at">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="read_time_minutes">Reading Time (minutes)</label>
                            <input type="number" class="form-control" id="read_time_minutes" name="read_time_minutes" min="1" value="5">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" class="form-control-file" id="featured_image" name="featured_image" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Separate tags with commas">
                    <small class="form-text text-muted">e.g., web development, laravel, php</small>
                </div>

                <!-- English Translation -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-info">English Content</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title_en">Title (English)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group">
                            <label for="excerpt_en">Excerpt (English)</label>
                            <textarea class="form-control" id="excerpt_en" name="excerpt_en" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_description_en">Meta Description (English)</label>
                            <textarea class="form-control" id="meta_description_en" name="meta_description_en" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_en">Content (English)</label>
                            <textarea class="form-control" id="content_en" name="content_en" rows="10" required></textarea>
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
                            <input type="text" class="form-control" id="title_ar" name="title_ar" dir="rtl" required>
                        </div>
                        <div class="form-group">
                            <label for="excerpt_ar">Excerpt (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="excerpt_ar" name="excerpt_ar" rows="3" dir="rtl" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_description_ar">Meta Description (Arabic)</label>
                            <textarea class="form-control" id="meta_description_ar" name="meta_description_ar" rows="2" dir="rtl"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_ar">Content (Arabic) <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="content_ar" name="content_ar" rows="10" dir="rtl" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Blog Post
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
