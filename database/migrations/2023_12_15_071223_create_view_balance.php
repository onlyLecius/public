<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $query = "CREATE
         OR REPLACE
         VIEW vw_balance AS
        SELECT
            user_id,
            SUM(CASE
                WHEN type = 'money_out' THEN -amount
                ELSE amount
            END) AS balance
        FROM
            balances
        GROUP BY
            user_id;";
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vw_balance');
    }

};
