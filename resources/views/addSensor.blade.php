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

<div class='container'>
	<div class='col-sm-8 col-sm-offset-2'>
		<div class='panel panel-default'>
			<div class='panel-heading'>Add New Sensor</div>
		
			<div class='panel-body'>
				<form class='form-horizontal' action='addSensor' method='POST'>
					<div class='form-group'>
						<label for='name' class='col-sm-4 control-label'>Name </label>
						<div class='col-sm-6'>
							<input class='form-control' type='text' name='name' required>
						</div>
					</div>

					<div class='form-group'>
						<label for='description' class='col-sm-4 control-label'>Description </label>
						<div class='col-sm-6'>
							<input class='form-control' type='text' name='description' required>
						</div>
					</div>

					<div class='form-group'>
						<label for='type' class='col-sm-4 control-label'>Data Type </label>
						<div class='col-sm-6'>
							<input class='form-control' type='radio' name='type' value='float' required>Float<br>
							<input class='form-control' type='radio' name='type' value='int' required>Integer<br>
							<input class='form-control' type='radio' name='type' value='string' required>String<br>
						</div>
					</div>

					<div class='form-group'>
						<label for='max' class='col-sm-4 control-label'>Maximum Value </label>
						<div class='col-sm-6'>
							<input class='form-control' type='text' name='max' required>
						</div>
					</div>
					
					<div class='form-group'>
						<label for='min' class='col-sm-4 control-label'>Minimum Value </label>
						<div class='col-sm-6'>
							<input class='form-control' type='text' name='min' required>
						</div>
					</div>

					<div class='form-group'>
						<label for='position' class='col-sm-4 control-label'>Cell Number</label>
						<div class='col-sm-6'>
							<input class='form-control' type='radio' name='position' value='1' required>Cell 1<br>
							<input class='form-control' type='radio' name='position' value='2' required>Cell 2<br>
							<input class='form-control' type='radio' name='position' value='3' required>Cell 3<br>
							<input class='form-control' type='radio' name='position' value='4' required>Cell 4<br>
						</div>
					</div>
					
					<button class='btn btn-primary' value='submit' name='submit'>Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
