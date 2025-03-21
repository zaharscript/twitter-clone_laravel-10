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

        /***
         * Run migrations.
         * varchar 250 char
         * likes integer 0
         * created_at timestamp
         * updated_at timestamp
         * id integer
         */
        Schema::create('thoughts', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('dislikes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thoughts');
    }
};
