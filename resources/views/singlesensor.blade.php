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

	<div class='col-sm-6 col-sm-offset-3'>
		<div class='well'>
		<h2>Previous recordings for {{ $sensor->Name }}</h2>

		@foreach ($readings as $reading) 
			<p><span class='data'>
				@if ($reading->sensorNum == 5)
					{{ round($reading->value, 2) }}
				@else 
					{{ $reading->value }}
				@endif
			</span> <span class='float-right'>{{ $reading->timestamp }}</span></p>
		@endforeach
		</div>
	</div>
	<div id="test"></div>
@endsection
