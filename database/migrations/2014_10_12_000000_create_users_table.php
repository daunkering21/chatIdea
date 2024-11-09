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
            $table->string('name'); // nama user (bisa diganti)
            $table->string('username')->unique(); // macam id kyk line id
            $table->string('email')->unique();
            $table->string('session_id')->nullable(); // untuk penanda session
            $table->string('profile_picture')->nullable();
            $table->string('status'); // status online, offline, away, busy
            $table->string('password');
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
