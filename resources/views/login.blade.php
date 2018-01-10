@extends('layouts.app')

@section('navbar')
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('login') }}">Log In</a>
	</li>
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('register') }}">Register</a>
	</li>
	<li class='nav-item active'>
		<a class='nav-line' href="{{ url('logout') }}">Logout</a>
	</li>

@endsection
@section('content')

	<h1>Login Page</h1>

	<p>login stuff yay</p>

@endsection
