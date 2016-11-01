<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospitalDepartment', function (Blueprint $table) {
            
            $table->increments('h_details_id');
            $table->string('hospital_id');
            $table->string('hospital_department');
            $table->text('department_description');
            $table->string('department_image');
            $table->string('department_register_time');
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
        Schema::table('hospitalDepartment', function (Blueprint $table) {
            //
        });
    }
}
