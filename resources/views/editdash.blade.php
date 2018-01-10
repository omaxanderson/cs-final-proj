@extends('layouts.app')

@section('navbar')
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('home') }}">Dashboard</a>
	</li>
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('edit-dashboard') }}">Edit Dashboard</a>
	</li>
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('logout') }}">Logout</a>
	</li>

@endsection
@section('content')

<div class='well col-sm-6 col-sm-offset-3'>
	<div class='col-centered'>
		<div style='float:left'>
		<form action='/updateSettings' method='POST'>
			@foreach ($sensors as $sensor)
				<div class='form-group'>
					<label>{{ $sensor->Name }}</label><br>
					<select name='{{ $sensor->sensorNum }}'>
						@for ($i = 1; $i < 5; $i++) 
							<option value='{{ $i }}'>Cell {{ $i }}</option>
						@endfor
					</select>
				</div>
			@endforeach
			<div class='form-group'>
				<input name='numSensors' value='{{ count($sensors) }}' hidden>
			</div>
			<button class='btn btn-primary' type='submit' value='submit'>Submit</button>
		</form>
		</div>

		<div style='float:right'>
			<form action='/addSensor' method='GET'>
				<div class='form-group'>
					<button class='btn btn-primary' type='submit' value='sumbit'>Add New Sensor</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
