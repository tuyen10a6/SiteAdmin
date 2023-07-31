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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('theme_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->json('config')->nullable();
            $table->string('code')->unique();
            $table->string('description')->nullable();
            $table->tinyInteger('status')->index("idx_sites_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
