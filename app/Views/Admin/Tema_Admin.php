<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url('assets3') ?>/production/images/favicon.ico" type="image/ico" />

	<title>Admin | KOLOM DESA</title>

	<!-- Bootstrap -->
	<link href="<?= base_url('assets3') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url('assets3') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url('assets3') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url('assets3') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

	<!-- bootstrap-progressbar -->
	<link href="<?= base_url('assets3') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="<?= base_url('assets3') ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url('assets3') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url('assets3') ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="http://localhost:8888/KolomDesa/public/" class="site_title"><i class="fa fa-paw"></i> <span>Kolom Desa</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Admin</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li><a href="http://localhost:8888/KolomDesa/public/Dashboard_Admin"> Dashboard <span></span></a>
									<!-- <ul class="nav child_menu">
										<li><a href="index.html">Dashboard</a></li>
										<li><a href="index2.html">Dashboard2</a></li>
										<li><a href="index3.html">Dashboard3</a></li>
									</ul> -->
								</li>
								<li><a><i class="fa fa-desktop"></i> Menu Utama <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>/Tentang">Tentang Kami</a></li>
										<li><a href="<?= base_url() ?>/Redaksi">Redaksi</a></li>
										<li><a href="<?= base_url() ?>/Info_iklan">Info Iklan</a></li>
										<li><a href="<?= base_url() ?>/Pedoman">Pedoman Media Cyber</a></li>
										<li><a href="<?= base_url() ?>/Disclaimer">Disclaimer</a></li>
										<li><a href="<?= base_url() ?>/Kebijakan">Kebijakan Privasi</a></li>
										<li><a href="<?= base_url() ?>/PedomanGuna">Pedoman Penggunaan</a></li>
										<li><a href="<?= base_url() ?>/Panduan">Panduan Pengiriman Penulisan</a></li>
										<li><a href="<?= base_url() ?>/Kontributor">Daftar Menjadi Kontributor</a></li>
										<li><a href="<?= base_url() ?>/Copyright">Copyright</a></li>

										<!-- <li><a href="<= base_url()?>/pegawai">Advanced Components</a></li> -->
										<!-- <li><a href="form_validation.html">Form Validation</a></li>
										<li><a href="form_wizards.html">Form Wizard</a></li>
										<li><a href="form_upload.html">Form Upload</a></li>
										<li><a href="form_buttons.html">Form Buttons</a></li> -->
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Modul Berita <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= base_url() ?>/berita_list">Berita</a></li>
										<!-- <li><a href="<= base_url()?>/Tag_Berita">Tag Berita</a></li> -->
										<li><a href="<?= base_url('berita/komentar/') ?>">Komentar Berita</a></li>
										<!-- <li><a href="<= base_url()?>/Sensor_Berita">Sensor Berita</a></li> -->
										<li><a href="<?= base_url() ?>/Berita_Foto">Berita Foto</a></li>
										<!-- <li><a href="<= base_url()?>/GaleriFoto_Berita">Gallery Foto Berita</a> -->
										<!-- <a href="invoice.html">Invoice</a></li>
										<li><a href="inbox.html">Inbox</a></li>
										<li><a href="calendar.html">Calendar</a></li> -->
									</ul>
								</li>
								<li><a><i class="fa fa-image"></i> Modul Video <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<!-- <li><a href="<= base_url()?>/Playlist_Video">Playlist Video</a></li> -->
										<li><a href="<?= base_url() ?>/Playlist_Video">Video</a></li>
										<!-- <li><a href="<= base_url()?>/Tag_Video">Tag Video</a></li> -->
										<li><a href="">Komentar Video</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i>Modul Iklan <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<!-- <li class="submenu-item ">
											<a href="<= base_url()?>/Iklan_Atas">Iklan Atas</a>
										</li>
										<li class="submenu-item ">
											<a href="<= base_url()?>/Iklan_Home">Iklan Home</a>
										</li>
										<li class="submenu-item ">
											<a href="<= base_url()?>/Iklan_Sidebar">Iklan Sidebar</a>
										</li> -->
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Iklan_Berita">List Iklan</a>
										</li>
									</ul>
								</li>
								<!-- <li><a><i class="fa fa-folder-open"></i>Modul Website <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li class="submenu-item ">
											<a href="<= base_url()?>/Logo_Website">Logo Website</a>
										</li>
										<li class="submenu-item ">
											<a href="<= base_url()?>/Template_Website">Template Website</a>
										</li>
										<li class="submenu-item ">
											<a href="<= base_url()?>/Backround_Website">Backround Website</a>
										</li>
									</ul>
								</li> -->
								<li><a><i class="fa fa-wifi"></i>Modul Interaksi <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Agenda">Agenda</a>
										</li>
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Sekilas_Info">Sekilas Info</a>
										</li>
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Jejak_Pendapat">Jejak Pendapat</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="menu_section">
							<h3>User Menu</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-cogs"></i> Modul User <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Input">Input</a>
										</li>
										<li class="submenu-item ">
											<a href="<?= base_url() ?>/Data_User">Data User</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="">
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="Profile Image" /></span>

											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="<?= base_url('assets3') ?>/production/images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<?= $this->renderSection('content'); ?>


			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url('assets3') ?>/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url('assets3') ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="<?= base_url('assets3') ?>/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="<?= base_url('assets3') ?>/vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="<?= base_url('assets3') ?>/vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- gauge.js -->
	<script src="<?= base_url('assets3') ?>/vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="<?= base_url('assets3') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="<?= base_url('assets3') ?>/vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="<?= base_url('assets3') ?>/vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="<?= base_url('assets3') ?>/vendors/Flot/jquery.flot.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/Flot/jquery.flot.pie.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/Flot/jquery.flot.time.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="<?= base_url('assets3') ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="<?= base_url('assets3') ?>/vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="<?= base_url('assets3') ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="<?= base_url('assets3') ?>/vendors/moment/min/moment.min.js"></script>
	<script src="<?= base_url('assets3') ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="<?= base_url('assets3') ?>/build/js/custom.min.js"></script>

</body>

</html>