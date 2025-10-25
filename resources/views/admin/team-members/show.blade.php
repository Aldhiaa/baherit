@extends('layouts.admin')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Team Member Details') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('View Team Member') }}
                        </h3>
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.team-members.edit', $teamMember) }}"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Edit') }}
                            </a>
                            <a href="{{ route('admin.team-members.index') }}"
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Back to List') }}
                            </a>
                        </div>
                    </div>

                    <!-- Tabs for languages -->
                    <div class="mb-6">
                        <div class="border-b border-gray-200 dark:border-gray-700">
                            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                <button type="button" id="tab-en" onclick="switchTab('en')"
                                        class="tab-button border-blue-500 text-blue-600 dark:text-blue-400 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    English
                                </button>
                                <button type="button" id="tab-ar" onclick="switchTab('ar')"
                                        class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                                    العربية
                                </button>
                            </nav>
                        </div>
                    </div>

                    <!-- English Content -->
                    <div id="content-en" class="tab-content">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Name') }}</h4>
                                <p class="text-lg">{{ $teamMember->getNameInLocale('en') }}</p>
                            </div>

                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Position') }}</h4>
                                <p class="text-lg">{{ $teamMember->getPositionInLocale('en') }}</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Bio') }}</h4>
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
                                <p>{{ $teamMember->getBioInLocale('en') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Arabic Content -->
                    <div id="content-ar" class="tab-content hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Name') }}</h4>
                                <p class="text-lg">{{ $teamMember->getNameInLocale('ar') }}</p>
                            </div>

                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Position') }}</h4>
                                <p class="text-lg">{{ $teamMember->getPositionInLocale('ar') }}</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Bio') }}</h4>
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
                                <p>{{ $teamMember->getBioInLocale('ar') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Common Information -->
                    <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">{{ __('Common Information') }}</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @if($teamMember->image_url)
                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Profile Image') }}</h4>
                                <img src="{{ $teamMember->image_url }}" alt="{{ $teamMember->getNameInLocale('en') }}" class="w-48 h-48 object-cover rounded-lg">
                            </div>
                            @endif

                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Social Media') }}</h4>
                                <div class="flex space-x-4">
                                    @if($teamMember->linkedin_url)
                                    <a href="{{ $teamMember->linkedin_url }}" target="_blank" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    @endif

                                    @if($teamMember->twitter_url)
                                    <a href="{{ $teamMember->twitter_url }}" target="_blank" class="text-blue-400 hover:text-blue-600 dark:text-blue-300 dark:hover:text-blue-200">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.1 10.1 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Featured Member') }}</h4>
                                <p class="text-lg">
                                    @if($teamMember->is_featured)
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">{{ __('Yes') }}</span>
                                    @else
                                        <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">{{ __('No') }}</span>
                                    @endif
                                </p>
                            </div>

                            <div>
                                <h4 class="text-md font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Sort Order') }}</h4>
                                <p class="text-lg">{{ $teamMember->sort_order }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(lang) {
            // Hide all content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected content
            document.getElementById(`content-${lang}`).classList.remove('hidden');

            // Update tab styles
            document.querySelectorAll('.tab-button').forEach(tab => {
                tab.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
                tab.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            });

            document.getElementById(`tab-${lang}`).classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300', 'dark:text-gray-400', 'dark:hover:text-gray-300');
            document.getElementById(`tab-${lang}`).classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-400');
        }
    </script>
@endsection
