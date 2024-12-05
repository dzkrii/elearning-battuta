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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->foreign('role_id')->references('id')->on('roles');
            $table->foreignId('role_id')->constrained();
            // 1 => super admin, 2 => admin
            $table->integer('is_active')->default('0');
            // 0 => belum verifikasi email
            // 1 => sudah verifikasi email
            $table->string('divisi');
            // akademik, feb, ft, fhp
            $table->string('image')->default('profile-default.png');
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
