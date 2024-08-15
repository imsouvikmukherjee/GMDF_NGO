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
        Schema::create('schoolresult', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school');
            $table->foreign('school')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('class');
            $table->foreign('class')->references('id')->on('schoolclass')->onDelete('cascade');

            $table->unsignedBigInteger('section');
            $table->foreign('section')->references('id')->on('schoolsection')->onDelete('cascade');

            $table->unsignedBigInteger('student');
            $table->foreign('student')->references('id')->on('users')->onDelete('cascade');

            $table->string('resultdocument');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolresult');
    }
};
