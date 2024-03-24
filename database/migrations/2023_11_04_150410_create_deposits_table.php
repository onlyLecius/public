<?php

use App\Enums\BankStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('deposits', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->string('document', 20);
            $table->string('hash', 36)->comment('Generate a 36 chars HASH ID');
            $table->double('amount');
            $table->string('reference_id')->comment('Reference for webhooks');
            $table->enum('status', [BankStatusEnum::PAID->value, BankStatusEnum::WAITING->value, BankStatusEnum::REJECT->value, BankStatusEnum::CANCELED->value])->default(BankStatusEnum::WAITING->value);
            $table->json('data');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
