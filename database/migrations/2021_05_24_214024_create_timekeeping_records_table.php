<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimekeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping_records', function (Blueprint $table) {
            $table->id();
            $table->time('clockin');
            $table->time('clockout');
            $table->integer('total');
            $table->unsignedbigInteger('employee_id');
            $table->unsignedbigInteger('timekeeping_id');
            $table->timestamps();
            
            $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timekeeping_records');
    }
}
