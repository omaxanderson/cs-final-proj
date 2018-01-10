<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
    </head>

    <body id='app-layout'>
            <nav class="navbar navbar-default ">
                <!-- Navbar Contents -->
        	<div class="container">
			<a class='navbar-brand' href='/'>Home</a>
			<div class='collapse navbar-collapse' id='app-navbar-collapse'>
				<ul class='navbar-nav mr-auto nav navbar-right'>
					<li class='nav-item active'>
						<a class='nav-line' href="{{ url('login') }}">Login</a>
					</li>
					<li class='nav-item active'>
						<a class='nav-line' href="{{ url('register') }}">Sign Up</a>
					</li>

				</ul>
			</div>
        	</div>
            </nav>

        @yield('content')
    </body>
</html>
