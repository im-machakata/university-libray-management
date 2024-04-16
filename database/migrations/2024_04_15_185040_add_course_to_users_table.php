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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('course_id')->nullable()->after('password')->constrained();
            $table->string('surname')->after('name');
            $table->string('phone')->nullable()->after('surname');
            $table->string('username')->after('phone')->unique();
            $table->string('school_id')->nullable()->after('username')->unique();
            $table->dropColumn('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('course_id');
            $table->dropColumn(['surname', 'phone', 'username', 'school_id']);
            $table->string('email')->unique();
        });
    }
};
