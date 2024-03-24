<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('default_name');

            $table->date('birth_date')->nullable();

            $table->string('email')->unique();
            $table->string('language')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('phone')->nullable();

            $table->boolean('fake')->default(false);

            $table->double('cpa')->default(20);
            $table->double('rev_real')->nullable();
            $table->double('rev_fake')->nullable();

            $table->boolean('admin')->default(false);

            $table->timestamp('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
