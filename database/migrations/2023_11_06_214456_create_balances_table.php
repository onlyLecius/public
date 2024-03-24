<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Enums\{BalanceOriginEnum, BalanceTypeEnum, BalanceStatusEnum};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balances', function (Blueprint $table) {

            $originEnum = [
                BalanceOriginEnum::DEPOSIT->value,
                BalanceOriginEnum::CPA->value,
                BalanceOriginEnum::RAV->value,
                BalanceOriginEnum::GAME->value,
            ];

            $typeEnum = [
                BalanceTypeEnum::MONEYOUT->value,
                BalanceTypeEnum::MONEYIN->value,
            ];

            $statusEnum = [
                BalanceStatusEnum::PAID->value,
                BalanceStatusEnum::WAITING->value,
                BalanceStatusEnum::CANCELED->value,
                BalanceStatusEnum::REJECTED->value,
            ];

            $table->id();

            $table->foreignId('user_id');
            $table->float('amount', 8, 2);
            $table->enum('origin', $originEnum)->nullable();
            $table->enum('type', $typeEnum);
            $table->enum('status', $statusEnum)->default(BalanceStatusEnum::WAITING->value);
            $table->string('pix')->nullable();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
