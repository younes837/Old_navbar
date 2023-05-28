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
        Schema::create('user_produit', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('produit_id');
            $table
                ->foreign('produit_id')
                ->on('produit')
                ->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table
                ->foreign('user_id')
                ->on('users')
                ->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_user_produit');
    }
};
