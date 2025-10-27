<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Admin Styles -->
    <style>
        :root {
            --sidebar-bg: #1e293b;
            --sidebar-hover: #334155;
            --sidebar-active: #0ea5e9;
            --header-bg: #ffffff;
            --content-bg: #f8fafc;
            --primary: #0ea5e9;
            --primary-dark: #0284c7;
        }

        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        .admin-sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .admin-sidebar.collapsed {
            width: 70px;
        }

        .admin-main {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--content-bg);
        }

        .admin-header {
            background: var(--header-bg);
            border-bottom: 1px solid #e2e8f0;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .admin-content {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
        }

        .sidebar-menu-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            margin: 0.25rem 0.5rem;
            border-radius: 0.5rem;
            transition: all 0.2s;
            text-decoration: none;
            color: #cbd5e1;
        }

        .sidebar-menu-item:hover {
            background: var(--sidebar-hover);
            color: white;
        }

        .sidebar-menu-item.active {
            background: var(--sidebar-active);
            color: white;
        }

        .sidebar-menu-item i {
            margin-right: 1rem;
            width: 20px;
            text-align: center;
        }

        .sidebar-menu-text {
            transition: opacity 0.3s;
        }

        .admin-sidebar.collapsed .sidebar-menu-text {
            display: none;
        }

        .admin-sidebar.collapsed .sidebar-brand-full {
            display: none;
        }

        .admin-sidebar:not(.collapsed) .sidebar-brand-collapsed {
            display: none;
        }

        .user-dropdown {
            position: relative;
        }

        .user-dropdown-menu {
            position: absolute;
            right: 0;
            top: 100%;
            margin-top: 0.5rem;
            width: 200px;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            z-index: 1000;
            display: none;
        }

        .user-dropdown-menu.show {
            display: block;
        }

        .user-dropdown-item {
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
            color: #334155;
            transition: background 0.2s;
        }

        .user-dropdown-item:hover {
            background: #f1f5f9;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            color: #64748b;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.25rem;
        }

        .toggle-sidebar:hover {
            background: #f1f5f9;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="p-4 border-b border-gray-700">
                <div class="flex items-center justify-between">
                    <div class="sidebar-brand-full flex items-center">
                        <div class="bg-blue-500 w-8 h-8 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-xl">Admin Panel</span>
                    </div>
                    <div class="sidebar-brand-collapsed">
                        <div class="bg-blue-500 w-8 h-8 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-6 px-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('Dashboard') }}</span>
                </a>

                <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase tracking-wider mt-6">
                    {{ __('Content Management') }}
                </div>

                <a href="{{ route('admin.services.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('admin.Services') }}</span>
                </a>

                <a href="{{ route('admin.case-studies.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.case-studies.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('Case Studies') }}</span>
                </a>

                <a href="{{ route('admin.team-members.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('Team Members') }}</span>
                </a>

                <a href="{{ route('admin.technologies.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.technologies.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('Technologies') }}</span>
                </a>

                <a href="{{ route('admin.about-sections.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.about-sections.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('admin.About') }}</span>
                </a>
                
                <a href="{{ route('admin.settings.index') }}"
                   class="sidebar-menu-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                    <i>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </i>
                    <span class="sidebar-menu-text">{{ __('Settings') }}</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Header -->
            <header class="admin-header">
                <div class="flex items-center">
                    <button class="toggle-sidebar mr-4" id="toggleSidebar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800">@yield('header', __('Admin Panel'))</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Language Switcher -->
                    @include('components.language-switcher')

                    <!-- Notifications -->
                    <div class="relative">
                        <button class="p-2 rounded-full hover:bg-gray-100 relative">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="notification-badge">3</span>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="user-dropdown">
                        <button class="flex items-center space-x-2 focus:outline-none" id="userMenuButton">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <div class="hidden md:block text-left">
                                <div class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</div>
                                <div class="text-xs text-gray-500">Administrator</div>
                            </div>
                            <svg class="w-5 h-5 text-gray-500 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="user-dropdown-menu" id="userDropdown">
                            <a href="{{ route('profile.edit') }}" class="user-dropdown-item">
                                {{ __('Profile') }}
                            </a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="user-dropdown-item w-full text-left">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="admin-content">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        // Toggle sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('adminSidebar').classList.toggle('collapsed');
        });

        // User dropdown toggle
        document.getElementById('userMenuButton').addEventListener('click', function() {
            document.getElementById('userDropdown').classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('userMenuButton');
            const userDropdown = document.getElementById('userDropdown');

            if (!userMenu.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.remove('show');
            }
        });
    </script>

    @yield('scripts')
</body>
</html>
