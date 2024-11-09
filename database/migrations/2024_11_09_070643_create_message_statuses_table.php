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
        Schema::create('message_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('message_id'); // terhubung ke message yang dikirim ke user tertentu 
            $table->integer('user_id'); // ini untuk user yang menerima pesan nya
            $table->string('status'); // tanda pesan sent, delivered, read
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_statuses');
    }
};
