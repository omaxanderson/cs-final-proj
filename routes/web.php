<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'DashboardController@displayDash');
/*Route::get('/', function () {
	if (Auth::check()) {
		return DashboardController::displayDash(); 
	} else {
		return redirect('/login');
//		return view('auth/login');
	}
});
*/
Route::get('test', 'DashboardController@test');
Route::get('dash', 'DashboardController@displayDash');
Route::get('/home', 'DashboardController@displayDash');
Route::get('display/{id}', 'DashboardController@displaySingle');
Route::get('addSensor', 'DashboardController@displayAddSensor');
Route::post('addSensor', 'DashboardController@addSensor');

Route::post('updateSettings', 'DashboardController@updateSettings');

Route::get('/login', function () {
    return view('login');
});

Route::get('/edit-dashboard', 'DashboardController@editDash');

Route::get('logout', function() {
	Auth::logout();
	return redirect('/login');
});

Route::get('Sensor/', 'SensorController@getSensors');
Route::get('Sensor/{id}', 'SensorController@getValues');
Route::post('Sensor/', 'SensorController@store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
