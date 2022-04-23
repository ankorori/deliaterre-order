<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConmpanyDatasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conmpany_datas', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('postlcode');
            $table->string('streetaddress');
            $table->string('phonenumber');
            $table->string('faxnumber');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conmpany_datas');
    }
}
