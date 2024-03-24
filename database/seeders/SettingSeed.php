<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $configData = [
            'SYS_NAME_UCF_PRIMARY' => "Fruit",
            'SYS_NAME_UCF_SECONDARY' => "Game",
            'SYS_NAME_UP_PRIMARY' => "FRUIT",
            'SYS_NAME_UP_SECONDARY' => "GAME",
            'SYS_URL' => "https://fruitcoin.test",
            'SYS_EMAIL_ADDRESS' => "email@teste.com",
            'SYS_HEAD_ADD' => null,
            'SYS_BODY_ADD' => null,
            'SYS_GAME_DIFICULT' => 3,
            'SYS_LOGO_URL' => "https://fruit.coingames.cloud/uploads/logo/logo.png",
            'SYS_FAVICON_URL' => "https://fruit.coingames.cloud/uploads/favicon/apple-touch-icon.png",
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
            'SYS_SUITPAY_SPLIT_USER' => '',
            'SYS_SUITPAY_SPLIT_PERCENT' => '',
            'SYS_MIN_DEPOSITO_CPA' =>20,
            'SYS_CHANCE_AFFILIATE' =>100,
            'SYS_WITHDRAW_RATE' => 5,
        ];

        foreach ($configData as $key => $value) {
            Setting::set($key, $value);
        }

    }

}
