<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public function index(): View
    {
        $settings = $this->getSettings();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            // Basic Settings
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'site_phone' => 'nullable|string|max:50',
            'site_address' => 'nullable|string|max:500',
            'site_description' => 'nullable|string|max:1000',
            
            // Logo Settings
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_dark' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,ico|max:1024',
            
            // Social Media
            'facebook_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            
            // SEO Settings
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        try {
            // Handle logo uploads
            if ($request->hasFile('logo')) {
                $oldLogo = $this->getSetting('logo');
                if ($oldLogo && Storage::disk('public')->exists($oldLogo)) {
                    Storage::disk('public')->delete($oldLogo);
                }
                $validated['logo'] = $request->file('logo')->store('settings/logos', 'public');
            }

            if ($request->hasFile('logo_dark')) {
                $oldLogoDark = $this->getSetting('logo_dark');
                if ($oldLogoDark && Storage::disk('public')->exists($oldLogoDark)) {
                    Storage::disk('public')->delete($oldLogoDark);
                }
                $validated['logo_dark'] = $request->file('logo_dark')->store('settings/logos', 'public');
            }

            if ($request->hasFile('favicon')) {
                $oldFavicon = $this->getSetting('favicon');
                if ($oldFavicon && Storage::disk('public')->exists($oldFavicon)) {
                    Storage::disk('public')->delete($oldFavicon);
                }
                $validated['favicon'] = $request->file('favicon')->store('settings/logos', 'public');
            }

            // Update or create settings
            foreach ($validated as $key => $value) {
                if ($value !== null) {
                    Setting::updateOrCreate(
                        ['key' => $key],
                        [
                            'value' => $value,
                            'type' => $this->getSettingType($key),
                            'group' => $this->getSettingGroup($key),
                            'is_translatable' => false,
                        ]
                    );
                }
            }

            // Clear settings cache
            Cache::forget('website_settings');

            return redirect()->route('admin.settings.index')
                ->with('success', 'Settings updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update settings: ' . $e->getMessage());
        }
    }

    private function getSettings(): array
    {
        return Cache::remember('website_settings', 3600, function () {
            $settings = Setting::all()->pluck('value', 'key')->toArray();
            
            // Set default values if not exists
            $defaults = [
                'site_name' => 'Baherit',
                'site_email' => 'info@baherit.com',
                'site_phone' => '+966 50 123 4567',
                'site_address' => 'Riyadh, Saudi Arabia',
                'site_description' => 'Baherit - Leading technology solutions provider specializing in innovative software development, web applications, and digital transformation services.',
                'meta_title' => 'Baherit - Technology Solutions & Software Development',
                'meta_description' => 'Professional technology solutions, software development, and digital services for modern businesses in Saudi Arabia',
                'meta_keywords' => 'baherit, technology solutions, software development, web development, digital transformation, saudi arabia',
                'logo' => 'images/settings/logo.png',
                'logo_dark' => 'images/settings/logo.png',
            ];
            
            return array_merge($defaults, $settings);
        });
    }

    private function getSetting(string $key): ?string
    {
        $settings = $this->getSettings();
        return $settings[$key] ?? null;
    }

    private function getSettingType(string $key): string
    {
        $imageTypes = ['logo', 'logo_dark', 'favicon'];
        $urlTypes = ['facebook_url', 'twitter_url', 'instagram_url', 'linkedin_url', 'youtube_url', 'github_url'];
        $textareaTypes = ['site_description', 'meta_description', 'meta_keywords'];
        
        if (in_array($key, $imageTypes)) {
            return 'image';
        } elseif (in_array($key, $urlTypes)) {
            return 'url';
        } elseif (in_array($key, $textareaTypes)) {
            return 'textarea';
        } else {
            return 'text';
        }
    }

    private function getSettingGroup(string $key): string
    {
        $logoKeys = ['logo', 'logo_dark', 'favicon'];
        $socialKeys = ['facebook_url', 'twitter_url', 'instagram_url', 'linkedin_url', 'youtube_url', 'github_url'];
        $seoKeys = ['meta_title', 'meta_description', 'meta_keywords'];
        
        if (in_array($key, $logoKeys)) {
            return 'branding';
        } elseif (in_array($key, $socialKeys)) {
            return 'social';
        } elseif (in_array($key, $seoKeys)) {
            return 'seo';
        } else {
            return 'general';
        }
    }
}
