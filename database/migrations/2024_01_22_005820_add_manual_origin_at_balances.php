<?php

use App\Enums\BalanceOriginEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('balances', function (Blueprint $table) {
            $table->dropColumn('origin');
        });

        Schema::table('balances', function (Blueprint $table) {
            $table->enum('origin', [
                BalanceOriginEnum::DEPOSIT->value,
                BalanceOriginEnum::CPA->value,
                BalanceOriginEnum::RAV->value,
                BalanceOriginEnum::GAME->value,
                BalanceOriginEnum::MANUAL->value,
                BalanceOriginEnum::AFFILIATE->value,
            ])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
