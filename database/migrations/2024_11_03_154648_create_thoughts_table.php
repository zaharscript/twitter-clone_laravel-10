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
        Schema::table('thoughts', function (Blueprint $table) {
            $table->unsignedInteger('dislikes')->default(0)->after('likes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thoughts', function (Blueprint $table) {
            $table->dropColumn('dislikes');
        });
    }
};
