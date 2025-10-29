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
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('categorys_id')->constrained('users')->onDelete('cascade');
            $table->string('no_aduan')->unique();
            $table->string('judul');
            $table->string('keterangan');
            $table->string('image')->nullable();
            $table->string('tanggal_aduan');
            $table->enum('status', ['pending', 'in_progress', 'resolve', 'reject'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complains');
    }
};
