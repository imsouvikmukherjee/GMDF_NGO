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
        Schema::create('schoolbankdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school');
            $table->foreign('school')->references('id')->on('users')->onDelete('cascade');
            $table->string('bank_name');
            $table->string('account_number')->unique();
            $table->string('ifsc_code');
            $table->string('branch');
            $table->string('upi_id')->nullable();
            $table->string('qr_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolbankdetails');
    }
};
