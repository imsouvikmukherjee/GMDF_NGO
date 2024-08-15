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
        Schema::create('studentdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('class');
            $table->unsignedBigInteger('section');
            $table->foreign('section')->references('id')->on('schoolsection')->onDelete('cascade');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('documentofstudent');
            $table->string('gurdiansname');
            $table->string('gurdianscontact');
            $table->string('optionalcontact')->nullable();
            $table->string('gurdiansemail')->nullable();
            $table->string('studentpicture');
            $table->string('documentofparent');
            $table->text('parmanentaddress');
            $table->text('currentaddress');
            $table->string('bloodgroup');
            $table->string('rollno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentdetails');
    }
};
