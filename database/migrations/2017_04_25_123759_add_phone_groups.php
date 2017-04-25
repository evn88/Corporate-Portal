<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->index();
            $table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();
            $table->string('group_name')->index();
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
        Schema::dropIfExists('phone_groups');
    }
}
