@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Project</h1>
        <a href="{{ route('admin.projects.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Projects
        </a>
    </div>

    <!-- Edit Project Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Project Information</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.projects.update', $project ?? 1) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_name">Client Name</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name', $project->client) }}" required>
                        </div>
                    </div>
                    @php
                        $delEn = json_decode($project->translate('en')->deliverables ?? '{}', true);
                        $delAr = json_decode($project->translate('ar')->deliverables ?? '{}', true);
                    @endphp
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="project_url">Project URL</label>
                            <input type="url" class="form-control" id="project_url" name="project_url" value="{{ old('project_url', $delEn['project_url'] ?? '') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="completion_date">Completion Date</label>
                            <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ old('completion_date', optional($project->completion_date)->format('Y-m-d')) }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="draft" {{ old('status', $project->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status', $project->status) === 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_featured">
                                    Featured Project
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Project Image</label>
                            @if($project->featured_image)
                                <div class="mb-2">
                                    <img src="{{ Storage::url($project->featured_image) }}" alt="Current Image" style="max-height: 100px;">
                                </div>
                            @endif
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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
                            <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $project->translate('en')->title ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description_en">Description (English)</label>
                            <textarea class="form-control" id="description_en" name="description_en" rows="4" required>{{ old('description_en', $project->translate('en')->description ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="technologies_en">Technologies Used (English)</label>
                            <textarea class="form-control" id="technologies_en" name="technologies_en" rows="2">{{ old('technologies_en', $delEn['technologies'] ?? '') }}</textarea>
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
                            <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{ old('title_ar', $project->translate('ar')->title ?? '') }}" dir="rtl">
                        </div>
                        <div class="form-group">
                            <label for="description_ar">Description (Arabic)</label>
                            <textarea class="form-control" id="description_ar" name="description_ar" rows="4" dir="rtl">{{ old('description_ar', $project->translate('ar')->description ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="technologies_ar">Technologies Used (Arabic)</label>
                            <textarea class="form-control" id="technologies_ar" name="technologies_ar" rows="2" dir="rtl">{{ old('technologies_ar', $delAr['technologies'] ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Project
                    </button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
