<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'key' => 'name',
                'value' => 'Company Name',
            ],
            [
                'key' => 'title',
                'value' => 'Company title.',
            ],
            [
                'key' => 'logo',
                'value' => 'assets/guest/images/logo.png',
            ],
            [
                'key' => 'email',
                'value' => 'example@domain.com',
            ],
            [
                'key' => 'phone',
                'value' => '+xxxxxxxxxxxxx',
            ],
            [
                'key' => 'address',
                'value' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            ],
        ]);

        Cache::flush();
    }
}
