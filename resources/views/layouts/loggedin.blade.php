<!DOCTYPE html>
<html lang=en>

	<head>
		<title>Final - anderso2</title>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108163464-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-108163464-5');
		</script>

		<!-- CSS and JavaScript -->
		<!-- Fonts -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

		<!-- Styles -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
		<link href="{{ elixir('css/dashboard.css') }}" rel="stylesheet">

		<style>
			body {
				font-family: 'Lato';
			}
			.fa-btn {
				margin-right: 6px;
			}
		</style>

		<script src="{{ asset('js/js.js') }}"></script>
	</head>

	</head>

	<body id='app-layout'>
		<nav class="navbar navbar-default ">
		<!-- Navbar Contents -->
			<div class="container">
				<a class='navbar-brand' href='/'>Home</a>
				<div class='collapse navbar-collapse' id='app-navbar-collapse'>
					<ul class='navbar-nav mr-auto nav navbar-right'>
						<li class='nav-item active'>
							<a class='nav-line' href="{{ url('home') }}">Dashboard</a>
						</li>
						<li class='nav-item active'>
							<a class='nav-line' href="{{ url('edit-dashboard') }}">Edit Dashboard</a>
						</li>
						<li class='nav-item active'>
							<a class='nav-line' href="{{ url('register') }}">Sign Up</a>
						</li>
						<li class='nav-item active'>
							<a class='nav-line' href="{{ url('logout') }}">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')

	</body>

</html>
