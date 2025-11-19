@extends('admin.layouts.app')

@section('title', 'Website Settings')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Website Settings</h1>
    </div>

    <!-- Settings Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <ul class="nav nav-tabs card-header-tabs" id="settingsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab">
                        <i class="fas fa-cog"></i> General
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="branding-tab" data-toggle="tab" href="#branding" role="tab">
                        <i class="fas fa-image"></i> Branding
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab">
                        <i class="fas fa-share-alt"></i> Social Media
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab">
                        <i class="fas fa-search"></i> SEO
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="tab-content" id="settingsTabContent">
                    <!-- General Settings Tab -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_name">Site Name</label>
                                    <input type="text" class="form-control" id="site_name" name="site_name" 
                                           value="{{ $settings['site_name'] ?? '' }}" placeholder="Enter site name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_email">Site Email</label>
                                    <input type="email" class="form-control" id="site_email" name="site_email" 
                                           value="{{ $settings['site_email'] ?? '' }}" placeholder="Enter site email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_phone">Site Phone</label>
                                    <input type="text" class="form-control" id="site_phone" name="site_phone" 
                                           value="{{ $settings['site_phone'] ?? '' }}" placeholder="Enter site phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_address">Site Address</label>
                                    <input type="text" class="form-control" id="site_address" name="site_address" 
                                           value="{{ $settings['site_address'] ?? '' }}" placeholder="Enter site address">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="site_description">Site Description</label>
                            <textarea class="form-control" id="site_description" name="site_description" rows="3" 
                                      placeholder="Enter site description">{{ $settings['site_description'] ?? '' }}</textarea>
                        </div>
                    </div>

                    <!-- Branding Settings Tab -->
                    <div class="tab-pane fade" id="branding" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo">Main Logo</label>
                                    <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*">
                                    <small class="form-text text-muted">Recommended: PNG/SVG, max 2MB</small>
                                    @if(isset($settings['logo']) && $settings['logo'])
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $settings['logo']) }}" alt="Current Logo" class="img-thumbnail" style="max-height: 100px;">
                                            <p class="small text-muted mt-1">Current Logo</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logo_dark">Dark Logo</label>
                                    <input type="file" class="form-control-file" id="logo_dark" name="logo_dark" accept="image/*">
                                    <small class="form-text text-muted">For dark backgrounds</small>
                                    @if(isset($settings['logo_dark']) && $settings['logo_dark'])
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $settings['logo_dark']) }}" alt="Current Dark Logo" class="img-thumbnail" style="max-height: 100px;">
                                            <p class="small text-muted mt-1">Current Dark Logo</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control-file" id="favicon" name="favicon" accept="image/*,.ico">
                                    <small class="form-text text-muted">ICO/PNG, 32x32px, max 1MB</small>
                                    @if(isset($settings['favicon']) && $settings['favicon'])
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $settings['favicon']) }}" alt="Current Favicon" class="img-thumbnail" style="max-height: 50px;">
                                            <p class="small text-muted mt-1">Current Favicon</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Settings Tab -->
                    <div class="tab-pane fade" id="social" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook_url"><i class="fab fa-facebook text-primary"></i> Facebook URL</label>
                                    <input type="url" class="form-control" id="facebook_url" name="facebook_url" 
                                           value="{{ $settings['facebook_url'] ?? '' }}" placeholder="https://facebook.com/yourpage">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter_url"><i class="fab fa-twitter text-info"></i> Twitter URL</label>
                                    <input type="url" class="form-control" id="twitter_url" name="twitter_url" 
                                           value="{{ $settings['twitter_url'] ?? '' }}" placeholder="https://twitter.com/yourhandle">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram_url"><i class="fab fa-instagram text-danger"></i> Instagram URL</label>
                                    <input type="url" class="form-control" id="instagram_url" name="instagram_url" 
                                           value="{{ $settings['instagram_url'] ?? '' }}" placeholder="https://instagram.com/yourprofile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin_url"><i class="fab fa-linkedin text-primary"></i> LinkedIn URL</label>
                                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" 
                                           value="{{ $settings['linkedin_url'] ?? '' }}" placeholder="https://linkedin.com/company/yourcompany">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube_url"><i class="fab fa-youtube text-danger"></i> YouTube URL</label>
                                    <input type="url" class="form-control" id="youtube_url" name="youtube_url" 
                                           value="{{ $settings['youtube_url'] ?? '' }}" placeholder="https://youtube.com/yourchannel">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="github_url"><i class="fab fa-github text-dark"></i> GitHub URL</label>
                                    <input type="url" class="form-control" id="github_url" name="github_url" 
                                           value="{{ $settings['github_url'] ?? '' }}" placeholder="https://github.com/yourusername">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SEO Settings Tab -->
                    <div class="tab-pane fade" id="seo" role="tabpanel">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title" 
                                   value="{{ $settings['meta_title'] ?? '' }}" placeholder="Enter meta title" maxlength="60">
                            <small class="form-text text-muted">Recommended: 50-60 characters</small>
                        </div>

                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3" 
                                      placeholder="Enter meta description" maxlength="160">{{ $settings['meta_description'] ?? '' }}</textarea>
                            <small class="form-text text-muted">Recommended: 150-160 characters</small>
                        </div>

                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2" 
                                      placeholder="Enter keywords separated by commas">{{ $settings['meta_keywords'] ?? '' }}</textarea>
                            <small class="form-text text-muted">Separate keywords with commas</small>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    @can('edit-settings', 'admin')
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> Update Settings
                    </button>
                    @endcan
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
