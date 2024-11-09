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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer('chatroom_id'); // terkoneksi ke satu chatroom id saja
            $table->integer('sender_id'); // pesan ini dikirim oleh satu pengguna
            $table->string('message_type'); // menjelaskan tipe pesan nya, seperti hanya text, gambar, file, video, audio, atau link
            $table->string('attachment_url')->nullable(); // 
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
