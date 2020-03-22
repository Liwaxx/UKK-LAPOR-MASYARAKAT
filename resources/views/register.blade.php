<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginAsset/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAsset/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginAsset/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>

	<div clas1s="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ url('/register')}}">
                {{ csrf_field() }}

					<span class="login100-form-title p-b-51">
						Register
                    </span>
                    @if ($errors->count() > 0)
                    @foreach( $errors->all() as $message )
                        <div class="alert alert-danger fade show" role="alert" style="width : 100%">{{ $message }}</div>
                    @endforeach
                    @endif
					<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Umur is required">
						<input class="input100" type="number" name="umur" placeholder="Umur">
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Alamat is required">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
                    </div>


					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div>
                            <a href="{{url('/login')}}" class="txt1">
								Already have account?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="loginAsset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/vendor/bootstrap/js/popper.js"></script>
	<script src="loginAsset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginAsset/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="loginAsset/js/main.js"></script>

</body>

</html>
