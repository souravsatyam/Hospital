<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('hospital', function (Blueprint $table) {
            $table->increments('hospital_id');
            $table->string('hospitalname');
            $table->string('hospitalemail');
            $table->string('hospitalpassword');
            $table->string('EstablishedYear');
            $table->string('contactNumber');
            $table->text('addressLine1');
            $table->text('addressLine2');
            $table->Integer('pincode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->tinyInteger('hospitalactive');
            $table->tinyInteger('su_ad_hos_active');
            $table->time('registertime');
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
        //
    }
}
