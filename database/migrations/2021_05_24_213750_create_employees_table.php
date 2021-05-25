<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->binary('photos');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->integer('contact');
            $table->string('address');
            $table->date('birthday');
            $table->enum('gender',['Male','Female']);
            $table->string('designation');
            $table->string('rate');
            $table->unsignedBigInteger('sss_id');
            $table->unsignedBigInteger('ph_id');
            $table->unsignedBigInteger('pi_id');
            $table->unsignedBigInteger('tax_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('sss_id')->references('id')->on('deductions');
            $table->foreign('ph_id')->references('id')->on('deductions');
            $table->foreign('pi_id')->references('id')->on('deductions');
            $table->foreign('tax_id')->references('id')->on('deductions');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
