<footer class="pt-5" id="footer">
    <div class="container">
        <div class="footer-main col-12 col-md-6 col-lg-4">
            <a href="#" class="footer-logo">
                <img src="{{ asset('storage/' . ($siteSettings['site_logo'] ?? 'default-logo.png')) }}"
                     class="img-fluid"
                     alt="{{ __('messages.footer.logo_alt') }}" />
            </a>
            <h3>{{ __('messages.footer.subscribe_heading') }}</h3>
            <form>
                <div class="input-group">
                    <input type="email"
                           class="form-control"
                           placeholder="{{ __('messages.footer.email_placeholder') }}" />
                    <button type="submit" class="btn-basic">
                        {{ __('messages.footer.subscribe_button') }}
                    </button>
                </div>
            </form>
        </div>

        <!-- you can add other footer columns here -->

        <div class="footer-copyright mt-4">
            <h4>{{ __('messages.footer.copyright', ['year' => date('Y')]) }}</h4>
            <ul class="footer-links">
                <li><a href="#">{{ __('messages.footer.privacy') }}</a></li>
                <li><a href="#">{{ __('messages.footer.terms') }}</a></li>
            </ul>
        </div>
    </div>
</footer>
