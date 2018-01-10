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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
