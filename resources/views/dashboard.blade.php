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

@php
	function getCurrentReading($sensorNum, $readings) {
		$found = False;
		foreach ($readings as $reading) {
			if ($reading->sensorNum == $sensorNum) {
				if ($reading->sensorNum == 5) {
					echo round($reading->value, 2) . ' Gbits/sec<p>';
					$found = True;
					break;
				} else {
					echo $reading->value;
					if ($reading->sensorNum == 1 || $reading->sensorNum == 2) {
						echo ' F';
					}
					echo '</p>';
					$found = True;
					break;
				}
			}
		}
		if (!$found) {
			echo 'no sensor data found<p>';
		}
	}
@endphp


<div class='container'>
	<h1>Welcome, {{ $user->name }}!</h1>

	@php 
		if (isset($addStatus)) {
			echo '<p style="color:green">' . $addStatus . '</p>';
		}
	@endphp

	<div id='dash_grid'>
		<div class='row'>
			<div class='well col-sm-5 dash_cell'>
				@foreach ($sensors as $sensor)
					@if ($sensor->Position == 1)
						<div>
						<a href='/display/{{ $sensor->sensorNum }}'>
						<h3>{{ $sensor->Name }}</h3>
						<p><!-- display reading with $sensor->pk for it's pk -->
							@php
								getCurrentReading($sensor->sensorNum, $readings);
							@endphp

						<p>
						</a>
						</div>
					@endif
				@endforeach
			</div>
			<div class='well col-sm-5 col-sm-offset-1 dash_cell'>
				@foreach ($sensors as $sensor)
					@if ($sensor->Position == 2)
						<div class='sensor_reading'>
						<a href='/display/{{ $sensor->sensorNum }}'>
						<h3>{{ $sensor->Name }}</h3>
						<p><!-- display reading with $sensor->pk for it's pk -->
							@php
								getCurrentReading($sensor->sensorNum, $readings);
							@endphp

						<p>
						</a>
						</div>
					@endif
				@endforeach
			</div>
		</div>

		<div class='row'>
			<div class='well col-sm-5 dash_cell'>
				@foreach ($sensors as $sensor)
					@if ($sensor->Position == 3)
						<div>
						<a href='/display/{{ $sensor->sensorNum }}'>
						<h3>{{ $sensor->Name }}</h3>
						<p><!-- display reading with $sensor->pk for it's pk -->
							@php
								getCurrentReading($sensor->sensorNum, $readings);
							@endphp

						<p>
						</a>
						</div>
					@endif
				@endforeach
			</div>
			<div class='well col-sm-5 col-sm-offset-1 dash_cell'>
				@foreach ($sensors as $sensor)
					@if ($sensor->Position == 4)
						<div>
						<a href='/display/{{ $sensor->sensorNum }}'>
						<h3>{{ $sensor->Name }}</h3>
						<p><!-- display reading with $sensor->pk for it's pk -->
							@php
								getCurrentReading($sensor->sensorNum, $readings);
							@endphp

						<p>
						</a>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
@endsection
