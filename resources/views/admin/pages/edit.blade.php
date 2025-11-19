@extends('admin.layouts.app')

@section('title', 'Edit Page')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Page</h1>
        <a href="{{ route('admin.pages.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Pages
        </a>
    </div>

    <!-- Edit Page Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Page Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.pages.update', $page ?? 1) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="slug">Page Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" required>
                            <small class="form-text text-muted">URL-friendly version (e.g., about-us, contact)</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="template">Template</label>
                            <select class="form-control" id="template" name="template">
                                <option value="default">Default</option>
                                <option value="about">About</option>
                                <option value="contact">Contact</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="featured_image">Featured Image</label>
                            <input type="file" class="form-control-file" id="featured_image" name="featured_image" accept="image/*">
                            <small class="form-text text-muted">Leave empty to keep current image</small>
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
                            <label for="title_en">Title (English)</label>
                            <input type="text" class="form-control" id="title_en" name="title_en" required>
                        </div>
                        <div class="form-group">
                            <label for="meta_description_en">Meta Description (English)</label>
                            <textarea class="form-control" id="meta_description_en" name="meta_description_en" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_en">Content (English)</label>
                            <textarea class="form-control" id="content_en" name="content_en" rows="8" required></textarea>
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
                            <label for="title_ar">Title (Arabic)</label>
                            <input type="text" class="form-control" id="title_ar" name="title_ar" dir="rtl">
                        </div>
                        <div class="form-group">
                            <label for="meta_description_ar">Meta Description (Arabic)</label>
                            <textarea class="form-control" id="meta_description_ar" name="meta_description_ar" rows="2" dir="rtl"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content_ar">Content (Arabic)</label>
                            <textarea class="form-control" id="content_ar" name="content_ar" rows="8" dir="rtl"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Page
                    </button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
