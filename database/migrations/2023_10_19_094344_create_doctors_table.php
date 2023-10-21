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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password")->unique();
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("date_of_birth");
            $table->unsignedBigInteger("age");
            $table->unsignedBigInteger("mobile_number");
            $table->string('email')->unique();
            $table->string("department");
            $table->string("address");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
