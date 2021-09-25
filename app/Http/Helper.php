<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

function settings($key): ?string
{
  $settings = Cache::rememberForever('settings', fn () => Schema::hasTable('settings') ? Setting::all() : null);
  if ($settings) {
    $value = $settings->where('key', $key)->first()?->value;
    if ($key == 'logo' and $value) return str_replace('public', '', $value);
  }
  return $value ?? null;
}
