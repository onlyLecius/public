<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $query = "CREATE
         OR REPLACE
          VIEW vw_indications_datas AS
            SELECT indicator_id, COUNT(user_id) AS total_pessoas
            FROM indications
            GROUP BY indicator_id;
        ";

        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vw_indications_datas');
    }

};
