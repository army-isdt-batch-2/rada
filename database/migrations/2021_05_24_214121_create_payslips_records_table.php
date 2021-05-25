<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('employee_id');
            $table->unsignedbigInteger('payslip_id');
            $table->date('date');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('payslip_id')->references('id')->on('payslips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips_records');
    }
}
