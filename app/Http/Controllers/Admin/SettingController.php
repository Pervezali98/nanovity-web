<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function getSettings(): View
    {
        $settings = Setting::whereStatus(true)->get();
        return view('admin.settings.index', compact('settings'));
    }

    public function setSettings(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['string', 'required'],
            'title' => ['string', 'required'],
            'logo' => ['nullable', 'image', 'max:1024'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string']
        ]);

        if ($request->hasFile('logo')) {
            Storage::delete(settings('logo'));
            $extension = $request->file('logo')->extension();
            $validated['logo'] = $request->file('logo')->storeAs('public/settings', 'logo.' . $extension);
        }
        foreach ($validated as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update([
                    'value' => $value
                ]);
            }
        }
        Cache::flush();
        return back()->with('success', __('Settings successfully updated.'));
    }
}
