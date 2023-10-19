<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MyVisitors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('my_visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->string('ip');
	    $table->string('country')->nullable();
	    $table->string('city')->nullable();
	    $table->string('visiting_url');
	    $table->string('visited_at');
            
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
