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
            $table->text('content')->change();

            if (!Schema::hasColumn('thoughts', 'likes')) {
                $table->integer('likes')->after('content')->default(0);
            }
            if (!Schema::hasColumn('thoughts', 'dislikes')) {
                $table->integer('dislikes')->after('likes')->default(0);
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thoughts', function (Blueprint $table) {
            if (Schema::hasColumn('thoughts', 'content')) {
                $table->dropColumn('content');
            }
            if (Schema::hasColumn('thoughts', 'likes')) {
                $table->dropColumn('likes');
            }
            if (Schema::hasColumn('thoughts', 'dislikes')) {
                $table->dropColumn('dislikes');
            }

        });
    }
};
