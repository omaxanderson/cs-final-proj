<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('sensors', function(Blueprint $table) {
		$table->increments('pk');
		$table->integer('sensorNum');
		$table->string('Name');
		$table->string('Description');
		$table->string('Type');
		$table->float('Max');
		$table->float('Min');
		$table->integer('Position');
					
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
