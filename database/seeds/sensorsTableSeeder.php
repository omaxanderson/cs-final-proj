<?php

use Illuminate\Database\Seeder;

class sensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('sensors') -> insert([
		'Name'=>"Campbest Office",
		'Description' => "Faculty Office",
		'Type'=>'Float',
		'Max'=>"100",
		'Min' => '0',
		'Position'=>'1',
		'sensorNum' => '1',
	]);
	DB::table('sensors') -> insert([
		'Name'=>"CECLNX01 Users",
		'Description' => "Number of users on CECLNX01",
		'Type'=>'Int',
		'Max'=>"100",
		'Min' => '0',
		'Position'=>'3',
		'sensorNum' => '3',
	]);
	DB::table('sensors') -> insert([
		'Name'=>"Server Room",
		'Description' => "Temps in server room",
		'Type'=>'Float',
		'Max'=>"100",
		'Min' => '0',
		'Position'=>'2',
		'sensorNum' => '2',
	]);

    }
}

