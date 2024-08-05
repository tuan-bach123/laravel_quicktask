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
            $table->string('username');
            $table->boolean('is_admin')->default(false)->invisible();
            $table->boolean('is_active')->default(false);
            $table->dropColumn('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'first_name', 'last_name', 'is_admin', 'is_active']);
            $table->string('name');
        });
    }
};
