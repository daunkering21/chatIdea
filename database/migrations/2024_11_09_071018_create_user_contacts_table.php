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
        Schema::create('user_contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); // id dari pemilik contact
            $table->integer('contact_id'); // id dari tujuan contact seperti teman
            $table->string('description')->nullable(); // penjelasan aja contohnya contact charles adalah teman, contact bang waang sebagai atasan
            $table->string('status'); // status contact nya terhubung satu sama lain atau gimana accepted, pending, blocked
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_contacts');
    }
};
