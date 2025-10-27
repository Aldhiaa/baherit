<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        
        // Initialize default settings if they don't exist
        $defaultSettings = [
            'site_name' => ['en' => '', 'ar' => ''],
            'site_email' => ['en' => '', 'ar' => ''],
            'site_phone' => ['en' => '', 'ar' => ''],
            'site_address' => ['en' => '', 'ar' => ''],
            'facebook' => ['en' => '', 'ar' => ''],
            'twitter' => ['en' => '', 'ar' => ''],
            'instagram' => ['en' => '', 'ar' => ''],
            'linkedin' => ['en' => '', 'ar' => ''],
            'youtube' => ['en' => '', 'ar' => ''],
            'site_logo' => null,
        ];
        
        foreach ($defaultSettings as $key => $defaultValue) {
            if (!isset($settings[$key])) {
                $settings[$key] = (object) [
                    'key' => $key,
                    'value' => $defaultValue,
                    'logo' => null
                ];
            }
        }
        
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        // Site information
        $this->updateSetting('site_name', [
            'en' => $request->input('site_name_en'),
            'ar' => $request->input('site_name_ar'),
        ]);
        
        $this->updateSetting('site_email', [
            'en' => $request->input('site_email_en'),
            'ar' => $request->input('site_email_ar'),
        ]);
        
        $this->updateSetting('site_phone', [
            'en' => $request->input('site_phone_en'),
            'ar' => $request->input('site_phone_ar'),
        ]);
        
        $this->updateSetting('site_address', [
            'en' => $request->input('site_address_en'),
            'ar' => $request->input('site_address_ar'),
        ]);

        // Social media
        $this->updateSetting('facebook', [
            'en' => $request->input('facebook_en'),
            'ar' => $request->input('facebook_ar'),
        ]);
        
        $this->updateSetting('twitter', [
            'en' => $request->input('twitter_en'),
            'ar' => $request->input('twitter_ar'),
        ]);
        
        $this->updateSetting('instagram', [
            'en' => $request->input('instagram_en'),
            'ar' => $request->input('instagram_ar'),
        ]);
        
        $this->updateSetting('linkedin', [
            'en' => $request->input('linkedin_en'),
            'ar' => $request->input('linkedin_ar'),
        ]);
        
        $this->updateSetting('youtube', [
            'en' => $request->input('youtube_en'),
            'ar' => $request->input('youtube_ar'),
        ]);

        // Logo upload
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'logo.' . $logo->getClientOriginalExtension();
            $logoPath = $logo->storeAs('settings', $logoName, 'public');
            $this->updateSetting('site_logo', null, $logoPath);
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    private function updateSetting($key, $value = null, $logo = null)
    {
        $setting = Setting::where('key', $key)->first();
        
        if (!$setting) {
            $setting = new Setting();
            $setting->key = $key;
        }
        
        if ($value !== null) {
            $setting->value = $value;
        }
        
        if ($logo !== null) {
            $setting->logo = $logo;
        }
        
        $setting->save();
    }
}