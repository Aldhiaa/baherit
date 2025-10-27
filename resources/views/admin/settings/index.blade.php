@extends('layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-1">{{ __('Site Settings') }}</h2>
                    <p class="text-gray-600 dark:text-gray-400">{{ __('Manage your website configuration') }}</p>
                </div>

                @if(session('success'))
                    <div class="mb-6 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700 dark:text-green-400">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <!-- Site Information Section -->
                    <div class="mb-10">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ __('Site Information') }}
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Site Name -->
                            <div>
                                <label for="site_name_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Site Name (English)') }}
                                </label>
                                <input type="text"
                                       name="site_name_en"
                                       id="site_name_en"
                                       value="{{ old('site_name_en', $settings['site_name']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="site_name_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Site Name (Arabic)') }}
                                </label>
                                <input type="text"
                                       name="site_name_ar"
                                       id="site_name_ar"
                                       value="{{ old('site_name_ar', $settings['site_name']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="site_email_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Email (English)') }}
                                </label>
                                <input type="email"
                                       name="site_email_en"
                                       id="site_email_en"
                                       value="{{ old('site_email_en', $settings['site_email']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="site_email_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Email (Arabic)') }}
                                </label>
                                <input type="email"
                                       name="site_email_ar"
                                       id="site_email_ar"
                                       value="{{ old('site_email_ar', $settings['site_email']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="site_phone_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Phone (English)') }}
                                </label>
                                <input type="text"
                                       name="site_phone_en"
                                       id="site_phone_en"
                                       value="{{ old('site_phone_en', $settings['site_phone']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="site_phone_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Phone (Arabic)') }}
                                </label>
                                <input type="text"
                                       name="site_phone_ar"
                                       id="site_phone_ar"
                                       value="{{ old('site_phone_ar', $settings['site_phone']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- Address -->
                            <div>
                                <label for="site_address_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Address (English)') }}
                                </label>
                                <input type="text"
                                       name="site_address_en"
                                       id="site_address_en"
                                       value="{{ old('site_address_en', $settings['site_address']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="site_address_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Address (Arabic)') }}
                                </label>
                                <input type="text"
                                       name="site_address_ar"
                                       id="site_address_ar"
                                       value="{{ old('site_address_ar', $settings['site_address']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>
                        </div>
                    </div>

                    <!-- Logo Section -->
                    <div class="mb-10">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            {{ __('Logo') }}
                        </h3>

                        <div class="flex items-center">
                            @if(isset($settings['site_logo']) && $settings['site_logo']->logo)
                                <div class="mr-6">
                                    <img src="{{ asset('storage/' . $settings['site_logo']->logo) }}" alt="Current Logo" class="h-20 w-20 object-contain">
                                </div>
                            @endif

                            <div class="flex-1">
                                <label for="logo" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Upload New Logo') }}
                                </label>
                                <input type="file"
                                       name="logo"
                                       id="logo"
                                       accept="image/*"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('PNG, JPG, GIF up to 2MB') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Section -->
                    <div class="mb-10">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                            {{ __('Social Media Links') }}
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Facebook -->
                            <div>
                                <label for="facebook_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Facebook URL (English)') }}
                                </label>
                                <input type="url"
                                       name="facebook_en"
                                       id="facebook_en"
                                       value="{{ old('facebook_en', $settings['facebook']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="facebook_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Facebook URL (Arabic)') }}
                                </label>
                                <input type="url"
                                       name="facebook_ar"
                                       id="facebook_ar"
                                       value="{{ old('facebook_ar', $settings['facebook']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- Twitter -->
                            <div>
                                <label for="twitter_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Twitter URL (English)') }}
                                </label>
                                <input type="url"
                                       name="twitter_en"
                                       id="twitter_en"
                                       value="{{ old('twitter_en', $settings['twitter']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="twitter_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Twitter URL (Arabic)') }}
                                </label>
                                <input type="url"
                                       name="twitter_ar"
                                       id="twitter_ar"
                                       value="{{ old('twitter_ar', $settings['twitter']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- Instagram -->
                            <div>
                                <label for="instagram_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Instagram URL (English)') }}
                                </label>
                                <input type="url"
                                       name="instagram_en"
                                       id="instagram_en"
                                       value="{{ old('instagram_en', $settings['instagram']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="instagram_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('Instagram URL (Arabic)') }}
                                </label>
                                <input type="url"
                                       name="instagram_ar"
                                       id="instagram_ar"
                                       value="{{ old('instagram_ar', $settings['instagram']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- LinkedIn -->
                            <div>
                                <label for="linkedin_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('LinkedIn URL (English)') }}
                                </label>
                                <input type="url"
                                       name="linkedin_en"
                                       id="linkedin_en"
                                       value="{{ old('linkedin_en', $settings['linkedin']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="linkedin_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('LinkedIn URL (Arabic)') }}
                                </label>
                                <input type="url"
                                       name="linkedin_ar"
                                       id="linkedin_ar"
                                       value="{{ old('linkedin_ar', $settings['linkedin']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <!-- YouTube -->
                            <div>
                                <label for="youtube_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('YouTube URL (English)') }}
                                </label>
                                <input type="url"
                                       name="youtube_en"
                                       id="youtube_en"
                                       value="{{ old('youtube_en', $settings['youtube']->value['en'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>

                            <div>
                                <label for="youtube_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    {{ __('YouTube URL (Arabic)') }}
                                </label>
                                <input type="url"
                                       name="youtube_ar"
                                       id="youtube_ar"
                                       value="{{ old('youtube_ar', $settings['youtube']->value['ar'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            {{ __('Update Settings') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
