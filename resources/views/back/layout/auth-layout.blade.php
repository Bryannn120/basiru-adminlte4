<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>@yield('$pageTitle')</title>

	<!-- Site favicon -->
	<link rel="basiru" sizes="180x180" href="/back/vendors/images/basiru.png" />
	<link rel="basiru" type="image/png" sizes="32x32" href="/back/vendors/images/basiru.png" />
	<link rel="basiru" type="image/png" sizes="16x16" href="/back/vendors/images/basiru.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
	@stack('stylesheets')
</head>

<body class="login-page">
<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<img src="/back/vendors/images/basiru.png" alt="" />
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('admin.login') }}">
					<img src="/back/vendors/images/basiru.png" alt="" />
				</a>
			</div>
			<div class="login-menu">
				<ul>
				
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.welcome') }}">Home</a></li>
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.investor') }}">Investor</a></li>
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.interprener') }}">Umkm</a></li>
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.about') }}">About Us</a></li>
					
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.login') }}" class="tbl-biru">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">

			@yield('content')
			<div class="footer">
				<div class="card">
					<div class="box-footerr">
						<div class="boxx">
							<h5>Alamat</h5>
							<p>Jl.Raya Olat Maras, Moyo Hulu, Kab.Sumbawa, Nusa Tenggara Barat Sumbawa 84371</p>
						</div>
						<div class="boxx">
							<h5>Layanan Kontak</h5>
							<p>Telp: 082342359160<br>Email: informatikac@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- js -->
	<script src="/back/vendors/scripts/core.js"></script>
	<script src="/back/vendors/scripts/script.min.js"></script>
	<script src="/back/vendors/scripts/process.js"></script>
	<script src="/back/vendors/scripts/layout-settings.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
	@stack('scripts')

</body>


</html>