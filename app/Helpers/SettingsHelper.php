<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingsHelper
{
    /**
     * Get a setting value by key
     */
    public static function get(string $key, $default = null)
    {
        $settings = self::all();
        return $settings[$key] ?? $default;
    }

    /**
     * Get all settings
     */
    public static function all(): array
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
            ];
            
            return array_merge($defaults, $settings);
        });
    }

    /**
     * Get logo URL
     */
    public static function logo(bool $dark = false): string
    {
        $key = $dark ? 'logo_dark' : 'logo';
        $logoPath = self::get($key);
        
        if ($logoPath) {
            // Check if it's a storage path
            if (str_starts_with($logoPath, 'settings/') || str_starts_with($logoPath, 'storage/')) {
                return asset('storage/' . $logoPath);
            } 
            // Check if it's already a full URL
            elseif (str_starts_with($logoPath, 'http')) {
                return $logoPath;
            }
            // Direct public path
            else {
                return asset($logoPath);
            }
        }
        
        // If dark logo is requested but not available, try regular logo
        if ($dark) {
            $regularLogo = self::get('logo');
            if ($regularLogo) {
                if (str_starts_with($regularLogo, 'settings/') || str_starts_with($regularLogo, 'storage/')) {
                    return asset('storage/' . $regularLogo);
                } elseif (str_starts_with($regularLogo, 'http')) {
                    return $regularLogo;
                } else {
                    return asset($regularLogo);
                }
            }
        }
        
        // Final fallback to default logo
        return asset('assets/images/logo' . ($dark ? '-dark' : '') . '.png');
    }

    /**
     * Get favicon URL
     */
    public static function favicon(): string
    {
        $faviconPath = self::get('favicon');
        
        if ($faviconPath) {
            return asset('storage/' . $faviconPath);
        }
        
        // Fallback to default favicon
        return asset('assets/images/favicon.ico');
    }

    /**
     * Get social media links
     */
    public static function socialLinks(): array
    {
        return [
            'facebook' => self::get('facebook_url'),
            'twitter' => self::get('twitter_url'),
            'instagram' => self::get('instagram_url'),
            'linkedin' => self::get('linkedin_url'),
            'youtube' => self::get('youtube_url'),
            'github' => self::get('github_url'),
        ];
    }

    /**
     * Get social media links with icons
     */
    public static function socialLinksWithIcons(): array
    {
        $links = self::socialLinks();
        $icons = [
            'facebook' => 'fab fa-facebook-f',
            'twitter' => 'fab fa-twitter',
            'instagram' => 'fab fa-instagram',
            'linkedin' => 'fab fa-linkedin-in',
            'youtube' => 'fab fa-youtube',
            'github' => 'fab fa-github',
        ];

        $result = [];
        foreach ($links as $platform => $url) {
            if ($url) {
                $result[$platform] = [
                    'url' => $url,
                    'icon' => $icons[$platform] ?? 'fas fa-link',
                    'name' => ucfirst($platform),
                ];
            }
        }

        return $result;
    }

    /**
     * Clear settings cache
     */
    public static function clearCache(): void
    {
        Cache::forget('website_settings');
    }
}
