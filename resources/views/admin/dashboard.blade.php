@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0">Dashboard</h1>
            <p class="text-muted">Welcome back, {{ Auth::guard('admin')->user()->name }}!</p>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
        <!-- Services -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Services</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['services'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cogs fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['projects'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blogs -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Blog Posts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['blogs'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-blog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Testimonials</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['testimonials'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">FAQs</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['faqs'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-question-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Categories -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">FAQ Categories</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['faq_categories'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counters -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Counters</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['counters'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Working Processes -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Working Processes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['working_processes'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banners -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Banners</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['banners'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pages -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pages</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['pages'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        @can('create-services', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-plus"></i> Add Service
                            </a>
                        </div>
                        @endcan

                        @can('create-blogs', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-success btn-block">
                                <i class="fas fa-plus"></i> Add Blog Post
                            </a>
                        </div>
                        @endcan

                        @can('create-testimonials', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-info btn-block">
                                <i class="fas fa-plus"></i> Add Testimonial
                            </a>
                        </div>
                        @endcan

                        @can('create-faqs', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.faqs.create') }}" class="btn btn-warning btn-block">
                                <i class="fas fa-plus"></i> Add FAQ
                            </a>
                        </div>
                        @endcan

                        @can('create-faq-categories', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.faq-categories.create') }}" class="btn btn-secondary btn-block">
                                <i class="fas fa-plus"></i> Add FAQ Category
                            </a>
                        </div>
                        @endcan

                        @can('create-counters', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.counters.create') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-plus"></i> Add Counter
                            </a>
                        </div>
                        @endcan

                        @can('create-working-processes', 'admin')
                        <div class="col-md-3 mb-3">
                            <a href="{{ route('admin.working-processes.create') }}" class="btn btn-success btn-block">
                                <i class="fas fa-plus"></i> Add Working Process
                            </a>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    
</div>
@endsection
