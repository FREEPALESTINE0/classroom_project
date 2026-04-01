<?php
session_start();

if(isset($_SESSION["username"]))
{
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<!-- saved from url=(0041)https://airforshare.com/files/MljyOw.html -->
<html lang="en"><!-- Mirrored from edulearn-lms-admin-template.multipurposethemes.com/template/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Mar 2026 10:43:17 GMT --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://edulearn-lms-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>edulearn - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet"href="template/template/vertical/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet"href="template/template/vertical/src/css/style.css">
	<link rel="stylesheet"href="template/template/vertical/src/css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(template/images/auth-bg/bg-16.html)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
	<div class="col-12">
		<div class="row justify-content-center g-0">
			<div class="col-lg-5 col-md-5 col-12">
				<div class="bg-white rounded10 shadow-lg">
					<div class="content-top-agile p-20 pb-0">
						<h2 class="text-primary fw-600">Let's Get Started</h2>
						<p class="mb-0 text-fade">Sign in to continue to edulearn.</p>    							
							    </div>
							<div class="p-40">
								<form action="php/login.php" method="POST">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input name="email" type="email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input name="password" type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1">
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button name="btnsub" type="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Don't have an account? <a href="register.php" class="text-primary ms-5">Sign Up</a></p>
								</div>
								
								<div class="text-center">
								  <p class="mt-20 text-fade">- Sign With -</p>
								  <p class="gap-items-2 mb-0">
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light" href="https://airforshare.com/files/MljyOw.html#"><i class="fa fa-facebook"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light" href="https://airforshare.com/files/MljyOw.html#"><i class="fa fa-twitter"></i></a>
									  <a class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light" href="https://airforshare.com/files/MljyOw.html#"><i class="fa fa-instagram"></i></a>
									</p>	
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="template/template/vertical/src/js/vendors.min.js"></script>
	<script src="template/template/vertical/src/js/chat-popup.js"></script>
    <script src="template/template/vertical/src/js/feather.min.js"></script>	





</body><!-- Mirrored from edulearn-lms-admin-template.multipurposethemes.com/template/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Mar 2026 10:43:19 GMT --></html>