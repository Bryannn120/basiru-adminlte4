@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login')
@section('content')
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To Basiru</h2>
							</div>
							<form action="{{ route('login_handler') }}" method="POST">
                            @csrf
                            @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail')}}
                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
							<!-- <div class="select-role">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn">
            <input type="radio" name="role" id="investor">
            <div class="icon">
                <img src="/back/vendors/images/briefcase.svg" class="svg" alt="">
            </div>
            <span>I'm</span>
            Investor
        </label>
        <label class="btn">
            <input type="radio" name="role" id="umkm">
            <div class="icon">
                <img src="/back/vendors/images/person.svg" class="svg" alt="">
            </div>
            <span>I'm</span>
            Umkm
        </label>
    </div>
</div> -->


								
								<div class="input-group custom">
									<input type="text" class="form-control form-control-lg" placeholder="Email/Username"
                                        name= "users" value="{{ old('users') }}">
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
									</div>
								</div>

								@error('user')
                                    <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                        {{ $message }}
                                    </div>
                                    @enderror

								<div class="input-group custom">
									<input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
									</div>
								</div>
								@error('password')
								<div class="d-block text-danger" style="margin-top: -25px; margin-bottom:15px;">
									{{ $message }}
								</div>
								@enderror
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Remember</label>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="{{ route('admin.forgot_password')}}">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
										
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
									
											<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a> -->
										</div>
										<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">
											
										</div>
										
									</div>
								</div>
							</form>
						</div>
					
@endsection