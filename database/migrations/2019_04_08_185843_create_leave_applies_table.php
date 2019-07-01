<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applies', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('employee_id');
             
              $table->string('leave_reason');
              $table->string('description');
              $table->date('leave_start');
              $table->date('leave_end');

              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_applies');
    }
}
