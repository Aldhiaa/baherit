@extends('admin.layouts.app')

@section('title', 'Create Banner')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Banner</h1>
        <a href="{{ route('admin.banners.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Banners
        </a>
    </div>

    <!-- Create Banner Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Banner Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="page_context">Page Context</label>
                            <select class="form-control" id="page_context" name="page_context" required>
                                <option value="">Select Page Context</option>
                                <option value="home-hero">Home Hero</option>
                                <option value="about-hero">About Hero</option>
                                <option value="services-hero">Services Hero</option>
                                <option value="contact-hero">Contact Hero</option>
                                <option value="blog-hero">Blog Hero</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="display_order">Display Order</label>
                            <input type="number" class="form-control" id="display_order" name="display_order" 
                                   value="1" min="1" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="button_text">Button Text</label>
                            <input type="text" class="form-control" id="button_text" name="button_text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="button_url">Button URL</label>
                            <input type="url" class="form-control" id="button_url" name="button_url">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                                <label class="form-check-label" for="is_active">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="background_image">Background Image</label>
                            <input type="file" class="form-control-file" id="background_image" name="background_image" accept="image/*">
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
                            <label for="subtitle_en">Subtitle (English)</label>
                            <input type="text" class="form-control" id="subtitle_en" name="subtitle_en">
                        </div>
                        <div class="form-group">
                            <label for="description_en">Description (English)</label>
                            <textarea class="form-control" id="description_en" name="description_en" rows="4"></textarea>
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
                            <label for="subtitle_ar">Subtitle (Arabic)</label>
                            <input type="text" class="form-control" id="subtitle_ar" name="subtitle_ar" dir="rtl">
                        </div>
                        <div class="form-group">
                            <label for="description_ar">Description (Arabic)</label>
                            <textarea class="form-control" id="description_ar" name="description_ar" rows="4" dir="rtl"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Banner
                    </button>
                    <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
