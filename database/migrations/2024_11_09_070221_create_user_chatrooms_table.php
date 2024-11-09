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
        Schema::create('user_chatrooms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); // user siapa saja yang ada di chatroom_id
            $table->integer('chatroom_id'); // room_id yang terkoneksi dengan user siapa saja yang ada di dalamnya
            $table->string('invitation_status')->default('accepted'); // role admin/member
            $table->string('role'); // role admin/member
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_chatrooms');
    }
};
