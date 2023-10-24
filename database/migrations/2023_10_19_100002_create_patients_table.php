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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("date_of_birth");
            $table->unsignedBigInteger("age")->nullable();
            $table->enum("blood_type", ["A", "-A", "AB", "-AB", "O", "-O"])->nullable();
            $table->unsignedBigInteger("mobile_number");
            $table->string("address")->nullable();
            $table->string('email')->unique()->nullable();
            $table->string("date_of_appointment");
            $table->enum("type", ["out patient", "in patient"])->nullable();
            $table->enum("status", ["pending", "on going", "discharged"])->nullable();
            $table->unsignedBigInteger("vitals_id")->nullable();
            $table->unsignedBigInteger("prescription_id")->nullable();
            $table->unsignedBigInteger("doctors_id")->nullable();
            $table->timestamps();

            $table->foreign('vitals_id')->references('id')->on('vitals');
            $table->foreign('prescription_id')->references('id')->on('prescriptions');
            $table->foreign('doctors_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
