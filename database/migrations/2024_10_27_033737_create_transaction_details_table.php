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
            Schema::create('transaction_details', function (Blueprint $table) {
                $table->uuid('id')->primary();
                $table->uuid('transaction_id');
                $table->uuid('course_id');
                $table->integer('quantity')->default(1);
                $table->decimal('price', 15, 2);
                $table->softDeletes();
                $table->timestamps();

                // Relasi ke tabel transactions
                $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
                // Relasi ke tabel courses
                $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};