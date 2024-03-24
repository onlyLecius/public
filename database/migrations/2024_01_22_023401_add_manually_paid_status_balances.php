<?php

use App\Enums\BalanceStatusEnum;
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
            $table->dropColumn('status');
        });

        Schema::table('balances', function (Blueprint $table) {
            $table->enum('status', [
                BalanceStatusEnum::PAID->value,
                BalanceStatusEnum::WAITING->value,
                BalanceStatusEnum::CANCELED->value,
                BalanceStatusEnum::REJECTED->value,
                BalanceStatusEnum::MANUALLY_PAID->value,
            ])->default('waiting');
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
