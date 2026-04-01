<?php
session_start();

if(isset($_SESSION["username"])=="")
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from edulearn-lms-admin-template.multipurposethemes.com/template/vertical/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2026 11:39:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://edulearn-lms-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>edulearn - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet"href="template/template/vertical/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet"href="template/template/vertical/src/css/style.css">
	<link rel="stylesheet"href="template/template/vertical/src/css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			  <span class="light-logo"><img src="template/images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="template/images/logo-letter-white.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="template/images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="template/images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light ms-0" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="btn-group d-md-inline-flex d-none">
              <a href="javascript:void(0)" title="skin Change" class="waves-effect skin-toggle waves-light">
			  	<label class="switch">
					<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
					<span class="switch-on"><i data-feather="moon"></i></span>
					<span class="switch-off"><i data-feather="sun"></i></span>
				</label>
			  </a>				
            </li>
			<li class="dropdown notifications-menu btn-group">
				<a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon bg-transparent" data-bs-toggle="dropdown" title="Notifications">
					<i data-feather="bell"></i>
					<div class="pulse-wave"></div>
			    </a>
				<ul class="dropdown-menu animated bounceIn">
				  <li class="header">
					<div class="p-20">
						<div class="flexbox">
							<div>
								<h4 class="mb-0 mt-0">Notifications</h4>
							</div>
							<div>
								<a href="#" class="text-danger">Clear All</a>
							</div>
						</div>
					</div>
				  </li>
				  <li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu sm-scrol">
					  <li>
						<a href="#">
						  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer">
					  <a href="#">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i data-feather="message-circle"></i>
			    </a>
			</li>
			
			<li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded-circle" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/usa.svg" alt="">
				</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/usa.svg" alt=""> English</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/spain.svg" alt=""> Spanish</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/ger.svg" alt=""> German</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/jap.svg" alt=""> Japanese</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/fra.svg" alt=""> French</a>
			    </div>
			</li>
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<div class="d-flex pt-1 align-items-center">
						<div class="text-end me-10">
							<p class="pt-5 fs-14 mb-0 fw-700"><?php echo strtoupper($_SESSION["username"])?></p>
							<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
						</div>
						<img src="template/images/avatar/avatar-13.png" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
					</div>
				</a>
			</li>		  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-inline-flex d-none">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon me-0">
			  	<i data-feather="sliders"></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative"> 
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="treeview">
				  <a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li>
						<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
						<li><a href="index2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
					</li>	
				  </ul>
				</li>	
				<li>
				  <a href="mailbox.html"><i data-feather="mail"></i><span>Mailbox</span></a>
				</li>
				<li>
				  <a href="contact_app_chat.html"><i data-feather="message-circle"></i><span>Group chats</span></a>
				</li>				  
				<li class="header">Components</li>

	 <!-- here -->
				<li class="treeview">
				  <a href="#">
					<i data-feather="lock"></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li>
						<a href="auth_login.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
						<a href="auth_login_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
					</li>
					<li>
						<a href="auth_register.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
						<a href="auth_register_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
					</li>
					<li>
						<a href="auth_lockscreen.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
						<a href="auth_lockscreen_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
					</li>
					<li>
						<a href="auth_user_pass.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
						<a href="auth_user_pass_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
					</li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i data-feather="alert-triangle"></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li>
						<a href="error_404.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
						<a href="error_404_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
					</li>
					<li>
						<a href="error_500.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
						<a href="error_500_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
					</li>
					<li>
						<a href="error_maintenance.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
						<a href="error_maintenance_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
					</li>	
				  </ul>
				</li>	 	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="https://edulearn-lms-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-24.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Best Education Admin</h4>
					</div>
				  </div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>