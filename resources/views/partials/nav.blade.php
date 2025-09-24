<nav class="header-nav-middle ">
    <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
        <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
            <div class="offcanvas-header navbar-shadow">
                <h5 class="mb-0">Back</h5>
                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('messages.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">{{ __('messages.About Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">{{ __('messages.Projects') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blogs.index') }}">{{ __('messages.Blogs') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">{{ __('messages.Services') }}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            {{ app()->getLocale() }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('switch.language', 'en') }}">English</a></li>
                            <li><a class="dropdown-item" href="{{ route('switch.language', 'ar') }}">Arabic</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
