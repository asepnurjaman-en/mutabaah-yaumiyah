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
        Schema::create('quran_surah_per_juzs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('juz_id');
            $table->unsignedBigInteger('surah_id');
            $table->unsignedBigInteger('start_ayat')->comment('start of juz');
            $table->unsignedBigInteger('end_ayat')->comment('end of juz');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('juz_id')->references('id')->on('quran_juzs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('surah_id')->references('id')->on('quran_surahs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('start_ayat')->references('id')->on('quran_ayats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('end_ayat')->references('id')->on('quran_ayats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_surah_per_juzs');
    }
};
