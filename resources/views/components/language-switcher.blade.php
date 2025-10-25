<div class="relative">
    <button id="languageDropdownButton" class="flex items-center text-sm font-medium text-secondary-600 hover:text-primary">
        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        {{ strtoupper(app()->getLocale()) }}
        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>

    <div id="languageDropdown" class="absolute {{ app()->getLocale() === 'ar' ? 'left-0' : 'right-0' }} mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden z-50">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
               class="block px-4 py-2 text-sm text-secondary-700 hover:bg-secondary-100 {{ app()->getLocale() === $localeCode ? 'bg-primary-50 text-primary' : '' }}">
                {{ $properties['native'] }}
            </a>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButton = document.getElementById('languageDropdownButton');
        const dropdown = document.getElementById('languageDropdown');

        if (dropdownButton && dropdown) {
            dropdownButton.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target) && e.target !== dropdownButton) {
                    dropdown.classList.add('hidden');
                }
            });
        }
    });
</script>
