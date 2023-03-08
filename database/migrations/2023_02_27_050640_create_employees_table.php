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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            $table->string('name_employee');
            $table->string('surname_employee');
            $table->integer('dpi');
            $table->integer('phone_number');
            $table->integer('salary_employee');
            $table->string('email');
            $table->date('date_birth');

            $table->unsignedBigInteger('cs_id');
            $table->foreign('cs_id')->references('id')->on('civil_states');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
