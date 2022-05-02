<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" integrity="sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>@yield('title')</title>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Home</a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-nav">
		<div class="nav-item text-nowrap">
			<a class="nav-link px-3" href="{{ route('logout') }}"
			    onclick="event.preventDefault();
			    document.getElementById('logout-form').submit();">
				{{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</div>
	</div>
</header>

<div class="container-fluid">
	<div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="position: fixed; height: 100vh;">
			<div class="position-sticky pt-3">
				<div class="flex-column list-group list-group-flush">
					<a class="list-group-item list-group-item-action" href="{{ route('admin.books.index') }}" style="background: #f8f9fa;">
						Books
					</a>
					<a class="list-group-item list-group-item-action" href="{{ route('admin.authors.index') }}" style="background: #f8f9fa;">
						Authors
					</a>
				</div>
			</div>
		</nav>

		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5" style="margin-left: 16%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
			@yield('content')
		</main>
	</div>
</div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js" integrity="sha512-T62eI76S3z2X8q+QaoTTn7FdKOVGjzKPjKNHw+vdAGQdcDMbxZUAKwRcGCPt0vtSbRuxNWr/BccUKYJo634ygQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->
@yield('scripts')
</body>
</html>