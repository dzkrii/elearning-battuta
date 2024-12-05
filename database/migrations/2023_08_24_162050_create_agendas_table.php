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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('judul')->unique();
            $table->string('slug');
            $table->string('tanggal_start');
            $table->string('tanggal_end');
            $table->string('waktu_start');
            $table->string('waktu_end');
            $table->string('tempat');
            $table->text('image');
            $table->integer('is_active')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
