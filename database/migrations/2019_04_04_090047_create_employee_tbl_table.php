<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_tbl', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->string('employee_department');
            $table->string('employee_name');
            $table->string('employee_designation');
            $table->string('employee_fathersname');
            $table->string('employee_mothersname');
            $table->date('employee_dob');
            $table->integer('employee_age');
            $table->string('gender');
             $table->string('nid')->unique();
            $table->string('employee_email')->unique();
            $table->integer('employee_phone')->unique();
            $table->string('employee_address');
            $table->string('employee_image');
            $table->string('employee_password');
         
            $table->integer('basic_salary');
            $table->date('employee_joiningdate');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_tbl');
    }
}
