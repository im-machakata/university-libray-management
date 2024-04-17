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
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('initiator')->constrained('users');
            $table->foreignId('receiver')->constrained('users');
            $table->timestamps();
        });
        Schema::table('chats', function (Blueprint $table) {
            $table->foreignId('conversation_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversations');
        Schema::table('chats', function (Blueprint $table) {
            $table->dropConstrainedForeignId('conversation_id');
        });
    }
};
