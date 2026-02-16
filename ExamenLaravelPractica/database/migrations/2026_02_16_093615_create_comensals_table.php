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
        Schema::create('comensals', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->dateTime('fecha');
            $table->foreignId('mesa_id')->nullable()->constrained()->nullOnDelete() == null;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comensals');
    }
};
