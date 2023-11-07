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
        Schema::create('komentar', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_berita')->nullable(false);
            $table->unsignedBigInteger('id_user')->nullable(false);
            $table->text('isi_komentar')->nullable(false);
            $table->foreign('id_berita')->references('id')->on('berita');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar');
    }
};
