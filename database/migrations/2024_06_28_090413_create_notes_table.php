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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject');
            $table->foreign('subject')->references('id')->on('schoolsubjects')->onDelete('cascade');
            $table->unsignedBigInteger('class');
            $table->foreign('class')->references('id')->on('schoolclass')->onDelete('cascade');
            $table->string('title');
            $table->string('notes_pdf')->nullable();
            $table->string('notes_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
