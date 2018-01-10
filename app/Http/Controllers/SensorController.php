<?php
/*
   scott campbell

   sensor controller rest api
   cse383 fall 2017

   final project
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
	/**
	 * return listing of all sensors
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getSensors()
	{
		$sensors = DB::table('sensors')->get();
		$ret['status'] = 'ok';
		$ret['msg'] = "ok";
		$ret['sensors'] = array();
		foreach ($sensors as $s) {
			$ret['sensors'][] = $s;
		}

		return response(json_encode($ret), 200)
			->header('Content-Type', 'application/json');	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getValues($id)
	{
		$sensors = DB::table('SensorValues')->where('SensorNum',$id)->orderBy('timestamp','desc')->limit(10)->get();
		$ret['status'] = 'ok';
		$ret['msg'] = "ok";
		$ret['sensors'] = array();
		foreach ($sensors as $s) {
			$ret['sensors'][] = $s;
		}

		return response(json_encode($ret), 200)
			->header('Content-Type', 'application/json');	
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$json = json_decode($request->getContent(),true);
		if (!isset($json['num']) || !isset($json['value']) || !isset($json['accessKey'])) {
			$ret['status'] = 'fail';
			$ret['msg'] = "mising parameters";
			return response(json_encode($ret), 200)
				->header('Content-Type', 'application/json');	
		}
		if ($json['accessKey'] != "CSE383123") {
			$ret['status'] = 'fail';
			$ret['msg'] = "invalid key";
			return response(json_encode($ret), 200)
				->header('Content-Type', 'application/json');	

		}
		//make sure sensor is legit
		$sensors = DB::table('sensors')->where('sensorNum',$json['num'])->get();
		if (count($sensors) != 1) {
			$ret['status'] = 'fail';
			$ret['msg'] = "invalid sensor";
			return response(json_encode($ret), 200)
				->header('Content-Type', 'application/json');	

		}

		//ok, data looks good, do insert
		$data = DB::table('SensorValues')->insert([
			['SensorNum'=>$json['num'],
			 'value' => $json['value']]
		]);
			$ret['status'] = 'ok';
			$ret['msg'] = "";
			return response(json_encode($ret), 200)
				->header('Content-Type', 'application/json');	


		//
	}
}

