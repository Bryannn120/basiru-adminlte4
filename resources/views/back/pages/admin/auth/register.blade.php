<!DOCTYPE html>
<html>

<head>

	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Registrasi</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/back/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/back/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/back/vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css" />
	<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ route('loginmulti') }}">
					<img src="/back/vendors/images/basiru.png" alt="" />
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('loginmulti') }}" class="tbl-biru">Login</a></li>
					<li style="display: inline; margin-right: 10px;"><a href="{{ route('admin.welcome') }}" class="tbl-biru">Home</a></li>

				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="/back/vendors/images/register-page-img.png" alt="" />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-15">
					<form action="{{ route('register') }}" method="POST">
    @csrf
    @if (Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="wizard-content">
        <h5>Basic Account Credentials</h5>
        <section>
            <div class="form-wrap max-width-600 mx-auto">
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email Address*</label>
                    <div class="col-sm-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('users') }}" required autocomplete="email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username*</label>
                    <div class="col-sm-8">
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('users') }}" required autocomplete="username">
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password*</label>
                    <div class="col-sm-8">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-4 col-form-label">Confirm Password*</label>
                    <div class="col-sm-8">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-sm-4 col-form-label">Role*</label>
                    <div class="col-sm-8">
                        <div class="custom-control custom-radio custom-control-inline pb-0">
                            <input type="radio" id="role_investor" name="role" class="custom-control-input" value="investor" {{ old('role') == 'investor' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="role_investor">Investor</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline pb-0">
                            <input type="radio" id="role_umkm" name="role" class="custom-control-input" value="umkm" {{ old('role') == 'umkm' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="role_umkm">UMKM</label>
                        </div>
                        @error('role')
                        <br><span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2 -->
        <div id="personal_info" class="hidden">
            <h3>Personal Information</h3>
            <div class="form-group row">
                <label for="full_name" class="col-sm-4 col-form-label">Full Name*</label>
                <div class="col-sm-8">
                    <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autocomplete="name">
                    @error('full_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="col-sm-4 col-form-label">Gender*</label>
                <div class="col-sm-8">
                    <div class="custom-control custom-radio custom-control-inline pb-0">
                        <input type="radio" id="gender_male" name="gender" class="custom-control-input" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="gender_male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline pb-0">
                        <input type="radio" id="gender_female" name="gender" class="custom-control-input" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="gender_female">Female</label>
                    </div>
                    @error('gender')
                    <br><span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat*</label>
                <div class="col-sm-8">
                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autocomplete="address">
                    @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">
		Launch modal
	</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center">
						<img src="/back/vendors/images/success.png" />
					</div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
					eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- welcome modal start -->
	<!-- <div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				<!-- DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div> -->
	<!-- <button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>  -->
	<!-- welcome modal end -->
	<!-- js -->
	<script src="/back/vendors/scripts/core.js"></script>
	<script src="/back/vendors/scripts/script.min.js"></script>
	<script src="/back/vendors/scripts/process.js"></script>
	<script src="/back/vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="/back/vendors/scripts/steps-setting.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>