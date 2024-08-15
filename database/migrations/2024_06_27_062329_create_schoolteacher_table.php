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
        Schema::create('schoolteacher', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school');
            $table->foreign('school')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('teacher');
            $table->foreign('teacher')->references('id')->on('users')->onDelete('cascade');
            $table->string('gender');
            $table->string('bloodgroup');
            $table->date('dateofbirth');
            $table->date('dateofjoining');
            $table->string('designation');
            $table->string('teacherdocument');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolteacher');
    }
};
