<?php

namespace Database\Seeders;

use App\Models\Config;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $configDatas = [
            'SYS_NAME_UCF_PRIMARY' => "Angry Cash",
            'SYS_NAME_UCF_SECONDARY' => "",
            'SYS_NAME_UP_PRIMARY' => "Angry",
            'SYS_NAME_UP_SECONDARY' => "Cash",
            'SYS_URL' => config('app.url'),
            'SYS_EMAIL_ADDRESS' => config('mail.from.address'),
            'SYS_HEAD_ADD' => null,
            'SYS_BODY_ADD' => null,
            'SYS_GAME_DIFICULT' => 1,
            'SYS_LOGO_URL' => "/assets/logo.png",
            'SYS_FAVICON_URL' => "/assets/logo.png",
            'SYS_MIN_ENTRADA' => 1,
            'SYS_MIN_SAQUE' => 1,
            'SYS_MIN_DEPOSITO' => 1,
            'SYS_CPA_PADRAO' => 10,
            'SYS_REV_FAKE_PADRAO' => 25,
            'SYS_REV_REAL_PADRAO' => 5,
            'SYS_CLIENT_ID' => '',
            'SYS_CLIENT_SECRET' => '',
            'SYS_MAX_DEPOSITO' => 700,
            'SYS_MAX_SAQUE' => 100,
            'SYS_SOLICITACOES_DIARIAS' => 2,
            'SYS_MIN_SAQUE_AFILIADO' => 2,
            'SYS_MAX_SAQUE_AFILIADO' => 200,
            'SYS_SOLICITACOES_DIARIAS_AFILIADO' => 10,
            'SYS_ROLLOVER' => 2,
            'SYS_SUITPAY_SPLIT_PERCENT' => '',
            'SYS_SUITPAY_SPLIT_USER' => '',
            'SYS_USER_NEW_MONEY' => true,
            'SYS_USER_NEW_MONEY_VALUE' => 3
        ];

        foreach ($configDatas as $key => $value) {
            Setting::set($key, $value);
        }

    }
}
