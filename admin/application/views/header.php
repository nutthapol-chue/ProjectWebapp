<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, materialpro admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 4 dashboard template">
	<meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
	<meta name="robots" content="noindex,nofollow">
	<title>ADMIN - SORAWIT PRINTING</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
	<!-- Favicon icon -->
	<!-- chartist CSS -->
	<link href="<?= base_url('assets/plugins/chartist-js/dist/chartist.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/chartist-js/dist/chartist-init.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
	<!--This page css - Morris CSS -->
	<link href="<?= base_url('assets/plugins/c3-master/c3.min.css'); ?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/style.min.css'); ?>" rel="stylesheet">
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="<?= base_url('assets/plugins/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url('assets/plugins/popper.js/dist/umd/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/app-style-switcher.js'); ?>"></script>
	<!--Wave Effects -->
	<script src="<?= base_url('assets/js/waves.js'); ?>"></script>
	<!--Menu sidebar -->
	<script src="<?= base_url('assets/js/sidebarmenu.js'); ?>"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<!-- chartist chart -->
	<script src="<?= base_url('assets/plugins/chartist-js/dist/chartist.min.js'); ?>"></script>
	<script src="<?= base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js'); ?>"></script>
	<!--c3 JavaScript -->
	<script src="<?= base_url('assets/plugins/d3/d3.min.js'); ?>"></script>
	<script src="<?= base_url('assets/plugins/c3-master/c3.min.js'); ?>"></script>
	<!--Custom JavaScript -->
	<script src="<?= base_url('assets/js/pages/dashboards/dashboard1.js'); ?>"></script>
	<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
	<script src="<?= base_url('assets/js/ajex.js'); ?>"></script>
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin6">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin6">
					<h2 class="navbar-brand ml-4" style="color:#FFF">SORAWIT PRINTING</h2>

					<a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<ul class="navbar-nav d-lg-none d-md-block ">
						<li class="nav-item">
							<a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
						</li>
					</ul>
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav mr-auto mt-md-0 ">
						<!-- ============================================================== -->
						<!-- Search -->
						<!-- ============================================================== -->

					</ul>

					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav">
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('admin_account')['first_name'] . ' ' . $this->session->userdata('admin_account')['last_name'] ?>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin6">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<!-- User Profile-->
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= index_page('ssss'); ?>" aria-expanded="false"><i class="mdi mr-2 mdi-gauge"></i><span class="hide-menu">แดชบอร์ด</span></a></li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">
								<i class="mdi mr-2 mdi-account-check"></i><span class="hide-menu">โปรไฟล์</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false"><i class="mdi mr-2 mdi-table"></i><span class="hide-menu">อนุมัติงาน</span></a></li>
					</ul>

				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
			<div class="sidebar-footer">
				<div class="row">
					<div class="col-4 link-wrap">
						<!-- item-->
						<a href="<?= base_url('auth/logout'); ?>" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power"></i></a>
					</div>
				</div>
			</div>
		</aside>

		<div class="page-wrapper">