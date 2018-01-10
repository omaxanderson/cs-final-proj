<?php
	namespace App\Http\Controllers;

	use App\SensorValue;
	use App\Sensor;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Support\Facades\Auth;
	
	class DashboardController extends Controller {

		public function displayDash() {
			// figure out which sensors this user wants
			// actually instead of messing with the users table I'll just have it the same for all users for now
			if (!Auth::check()) {
				return redirect('login');
			}
		
	
			// create an array with each current reading
			$readings = SensorValue::orderBy('timestamp', 'DESC')->get();

			// this object should be sorted
			$sensors = Sensor::orderBy('Position')->get();

			$user = Auth::user();

			return view('dashboard', compact('readings', 'sensors', 'user'));
		}

		public function displayAddSensor() {
			if (!Auth::check()) {
				return redirect('login');
			} else {
				return view('addSensor');
			}
		}

		public function addSensor(Request $request) {
			if (!Auth::check()) {
				return redirect('login');
			}

			$numSensors = count(Sensor::all());
			$newSensor = new Sensor;

			$newSensor->Name = $request->name;
			$newSensor->Description = $request->description;
			$newSensor->Type = $request->type;
			$newSensor->Max = $request->max;
			$newSensor->Min = $request->min;
			$newSensor->Position = $request->position;
			$newSensor->sensorNum = $numSensors + 1;
			if ($newSensor->save()) {
				$addStatus = 'New sensor successfully added';
			} else {
				$addStatus = 'Error adding sensor';
			}

			return redirect('home');
//			return view('dashboard', compact('addStatus'));
		}

		public function getSensorValues($sensorNum) {
			$users = DB::select('select * from users', [1]);
			echo $users;
		}
			
		public function editDash() {
			if (!Auth::check()) {
				return redirect('login');
			}

			$sensors = Sensor::orderBy('sensorNum')->get();
			return view('editdash', compact('sensors'));

		}

		public function updateSettings(Request $request) {
			// update the values in the thing
			// figure out how to parse the stuff
			if (!Auth::check()) {
				return redirect('login');
			}

			for ($i = 1; $i <= $request->numSensors; $i++) {
				// update the sensor position
				$sensor = Sensor::where('sensorNum', $i)->first();
				$sensor->Position = $request->$i;
				$sensor->save();
			}
			return redirect('home');
			

//			return redirect('home');
		}
		
		public function displaySingle(Request $request) {
			if (!Auth::check()) {
				return redirect('login');
			}
			$id = $request->id;
			$sensor = Sensor::where('sensorNum', $id)->get()[0];
			$readings = SensorValue::where('sensorNum', $id)->orderBy('timestamp', 'DESC')->limit(50)->get();
			return view('singlesensor', compact('readings', 'sensor'));
		}

		public function test() {
			
			return 'test works';
		}

	}



?>
