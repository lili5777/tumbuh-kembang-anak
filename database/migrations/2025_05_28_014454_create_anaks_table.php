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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama');
            $table->foreignId('usia_id')->constrained('usias')->onDelete('cascade');
            $table->float('tb');
            $table->float('bb');
            $table->float('lk');
            $table->foreignId('motorik_id')->constrained('kemampuans')->onDelete('cascade');
            $table->foreignId('bicara_id')->constrained('kemampuans')->onDelete('cascade');
            $table->string('ketegori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};
