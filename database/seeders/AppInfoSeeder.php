<?php

namespace Database\Seeders;

use App\Models\AppInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppInfoSeeder extends Seeder
{


    public function run(): void
    {
        $configData = [
            'APP_TOTAL_DEPOSITS' => "0",
            'APP_TOTAL_WITHDRAWS' => "0",
            'APP_TOTAL_WITHDRAWS_AFILIATE' => "0",
            'APP_TOTAL_GGR' => "0",
        ];

        foreach ($configData as $key => $value) {
            AppInfo::set($key, $value);
        }
    }
}
