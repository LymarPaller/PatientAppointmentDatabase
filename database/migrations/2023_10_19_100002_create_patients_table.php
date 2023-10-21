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
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("date_of_birth");
            $table->unsignedBigInteger("age");
            $table->enum("blood_type", ["A", "-A", "AB", "-AB", "O", "-O"]);
            $table->unsignedBigInteger("mobile_number");
            $table->string("address");
            $table->string('email')->unique();
            $table->string("date_of_appointment");
            $table->enum("type", ["out patient", "in patient"]);
            $table->enum("status", ["pending", "on going", "discharged"]);
            $table->unsignedBigInteger("vitals_id");
            $table->unsignedBigInteger("prescription_id");
            $table->unsignedBigInteger("doctors_id");
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
