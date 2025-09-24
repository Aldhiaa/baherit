<header>
    <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
    </button>
    <a href="{{ route('home') }}">
        <img src="{{ asset('storage/' . ($siteSettings['logo'] ?? 'default-logo.png')) }}" style="width:100px;
  height: 17 0px;" alt="logo" />
    </a>
    @include('partials.nav')
    <a href="#" class="btn btn-theme d-none d-xl-block"><span>{{ __('messages.Ask Us') }}</span></a>
</header>

