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
        Schema::create('chatrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama chatroom
            $table->string('description')->nullable(); // deskripsi room untuk test di public
            $table->string('type'); // untuk privateChatroom, publicChatroom
            $table->integer('max_user'); // untuk privateChatroom, publicChatroom
            $table->string('password')->nullable(); // password untuk masuk ke private room, tapi klo di invite otomatis lewatin password ini
            $table->integer('created_by'); // int room creator
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chatrooms');
    }
};
