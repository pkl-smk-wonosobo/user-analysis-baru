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
        Schema::table('analyst_group', function (Blueprint $table) {
            $table->unsignedBigInteger('analyst_id')->after('')->required();
            $table->foreign('analyst_id')->references('id')->on('analyst')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('analyst_group', function (Blueprint $table) {
            $table->dropForeign(['analyst_id']);
            $table->dropColumn('analyst_id');
        });
    }
};
