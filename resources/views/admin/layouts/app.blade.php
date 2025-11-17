<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --sidebar-bg: #2c3e50;
            --sidebar-hover: #34495e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            color: white;
            overflow-y: auto;
            transition: all 0.3s;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 20px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            text-align: center;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .sidebar-menu {
            list-style: none;
            padding: 20px 0;
        }

        .sidebar-menu li {
            margin: 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: var(--sidebar-hover);
            color: white;
            border-left: 4px solid var(--primary-color);
        }

        .sidebar-menu a i {
            width: 30px;
            font-size: 18px;
        }

        .sidebar-menu .menu-label {
            font-size: 11px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
            padding: 15px 20px 5px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* Top Navbar */
        .top-navbar {
            background: white;
            padding: 15px 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            position: relative;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 10px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            min-width: 200px;
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: background 0.2s;
        }

        .dropdown-menu a:hover {
            background: #f8f9fa;
        }

        .dropdown-menu hr {
            margin: 0;
            border-color: #e9ecef;
        }

        /* Content Area */
        .content-area {
            padding: 30px;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background: white;
            border-bottom: 1px solid #e9ecef;
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }

        .border-left-primary {
            border-left: 4px solid var(--primary-color) !important;
        }

        .border-left-success {
            border-left: 4px solid #28a745 !important;
        }

        .border-left-info {
            border-left: 4px solid #17a2b8 !important;
        }

        .border-left-warning {
            border-left: 4px solid #ffc107 !important;
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                left: calc(var(--sidebar-width) * -1);
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }

        /* Utilities */
        .text-xs {
            font-size: 0.75rem;
        }

        .text-gray-800 {
            color: #5a5c69;
        }

        .text-gray-300 {
            color: #dddfeb;
        }

        .font-weight-bold {
            font-weight: 700;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3>TechIN</h3>
            <small>Admin Panel</small>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @can('view-services')
            <li class="menu-label">Content Management</li>
            <li>
                <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                    <i class="fas fa-cogs"></i>
                    <span>Services</span>
                </a>
            </li>
            @endcan

            @can('view-counters')
            <li>
                <a href="{{ route('admin.counters.index') }}" class="{{ request()->routeIs('admin.counters.*') ? 'active' : '' }}">
                    <i class="fas fa-sort-numeric-up"></i>
                    <span>Counters</span>
                </a>
            </li>
            @endcan

            @can('view-blogs')
            <li>
                <a href="#" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
                    <i class="fas fa-blog"></i>
                    <span>Blog Posts</span>
                </a>
            </li>
            @endcan

            @can('view-portfolios')
            <li>
                <a href="#" class="{{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            @endcan

            @can('view-faqs')
            <li>
                <a href="#" class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">
                    <i class="fas fa-question-circle"></i>
                    <span>FAQs</span>
                </a>
            </li>
            @endcan

            @can('view-team')
            <li>
                <a href="#" class="{{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <span>Team Members</span>
                </a>
            </li>
            @endcan

            @can('view-testimonials')
            <li>
                <a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                    <i class="fas fa-comments"></i>
                    <span>Testimonials</span>
                </a>
            </li>
            @endcan

            @can('view-settings')
            <li class="menu-label">Settings</li>
            <li>
                <a href="#" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                    <i class="fas fa-cog"></i>
                    <span>General Settings</span>
                </a>
            </li>
            @endcan

            @can('view-admins')
            <li class="menu-label">Administration</li>
            <li>
                <a href="#" class="{{ request()->routeIs('admin.admins.*') ? 'active' : '' }}">
                    <i class="fas fa-user-shield"></i>
                    <span>Admin Users</span>
                </a>
            </li>
            @endcan

            @can('view-roles')
            <li>
                <a href="#" class="{{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                    <i class="fas fa-key"></i>
                    <span>Roles & Permissions</span>
                </a>
            </li>
            @endcan
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div class="navbar-left">
                <button class="btn btn-link d-md-none" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h5 class="mb-0">@yield('title', 'Dashboard')</h5>
            </div>

            <div class="navbar-right">
                <a href="{{ LaravelLocalization::localizeUrl('/') }}" target="_blank" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-external-link-alt"></i> View Site
                </a>

                <div class="user-menu" id="userMenu">
                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::guard('admin')->user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <div style="font-weight: 600; font-size: 14px;">{{ Auth::guard('admin')->user()->name }}</div>
                        <div style="font-size: 12px; color: #6c757d;">
                            @foreach(Auth::guard('admin')->user()->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </div>
                    </div>
                    <i class="fas fa-chevron-down" style="font-size: 12px;"></i>

                    <div class="dropdown-menu" id="userDropdown">
                        <a href="#">
                            <i class="fas fa-user"></i> Profile
                        </a>
                        <a href="#">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <hr>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </div>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
    <script>
        // User dropdown toggle
        document.getElementById('userMenu').addEventListener('click', function() {
            document.getElementById('userDropdown').classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('userMenu');
            const userDropdown = document.getElementById('userDropdown');
            
            if (!userMenu.contains(event.target)) {
                userDropdown.classList.remove('show');
            }
        });

        // Sidebar toggle for mobile
        const sidebarToggle = document.getElementById('sidebarToggle');
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('show');
            });
        }
    </script>

    @stack('scripts')
</body>
</html>
