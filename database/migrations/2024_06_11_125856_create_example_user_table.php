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
        Schema::create('example_user', function (Blueprint $table) {
            $table->id();
            //lave foranea de ejemplares
            $table->unsignedBigInteger('example_id')->nullable();
            $table->foreign('example_id')->references('id')->on('examples')->onDelete('cascade');

            //llave foranea de usuario
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('example_user');
    }
};
