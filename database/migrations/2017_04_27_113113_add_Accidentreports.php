<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccidentreports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidentreports', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('phone_groups_id')->index();   
           $table->integer('phone_professions_id')->index();
           $table->integer('phone_speeddials_id');
           $table->string('name')->index();
           $table->string('int_phone')->nullble()->index();
           $table->string('ext_phone')->nullble()->index();
           $table->integer('order')->default('100')->comment('весы для сортировки');
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
