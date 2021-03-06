<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" />
	<!-- website name -->
	<meta property="og:site" content="" />
	<!-- website link -->
	<meta property="og:title" content="" />
	<!-- title shown in the actual shared post -->
	<meta property="og:description" content="" />
	<!-- description shown in the actual shared post -->
	<meta property="og:image" content="" />
	<!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" />
	<!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title><?= !empty($title) ? $title : 'ห้างหุ้นส่วนจำกัด สรวิชญ์ พริ้นติ้ง'; ?></title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/fontawesome/css/all.css" rel="stylesheet">
	<link href="/assets/css/swiper.css" rel="stylesheet">
	<link href="/assets/css/magnific-popup.css" rel="stylesheet">
	<link href="/assets/fullcalendar/main.css" rel="stylesheet">
	<link href="/assets/css/styles.css" rel="stylesheet">


	<!-- Favicon  -->
	<link rel="icon" href="/assets/images/favicon.ico">

	<!-- Scripts -->
	<script src="/assets/js/jquery.min.js"></script>

</head>

<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<a class="navbar-brand logo-text page-scroll" style="color: rgb(206, 24, 212);" href="<?= index_page(); ?>">SORAWIT PRINTING</a>

		<!-- Image Logo -->
		<!-- <a class="navbar-brand logo-image" href="index.html"><img src="/assets/images/logo_2.png" alt="alternative"></a> -->

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?=  $this->router->class == 'home' ? '#header': base_url(); ?>">หนัาหลัก <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?=  $this->router->class == 'home' ? '#calendar': base_url()."#calendar"; ?>">ตารางงาน</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?=  $this->router->class == 'home' ? '#request': base_url()."#request"; ?>">นัดหมาย</a>
				</li>

				<!-- Dropdown Menu -->
				<li class="nav-item dropdown">
					<!-- class  dropdown-toggle -->
					<a class="nav-link page-scroll" href="<?=  $this->router->class == 'home' ? '#about': base_url()."#about"; ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">เกี่ยวกับ</a>
					<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div> -->
				</li>
				<!-- end of dropdown menu -->

				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?=  $this->router->class == 'home' ? '#contact	': base_url()."#contact	"; ?>">ติดต่อ</a>
				</li>
				<?php if (!empty($this->session->userdata('user_account'))) { ?>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="<?= base_url('chat'); ?>">แชทกับผู้ดูแล</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle page-scroll active" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">บัญชี</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<!-- <a class="dropdown-item" href="<?= base_url('logout'); ?>">แก้ไขบัญชี</a>
							<div class="dropdown-items-divide-hr"></div> -->
							<a class="dropdown-item" href="<?= base_url('logout'); ?>">ออกจากระบบ</a>
						</div>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link popup-with-move-anim" href="#login">ล็อกอิน</a>
					</li>
				<?php } ?>
			</ul>
			<span class="nav-item social-icons">
				<span class="fa-stack">
					<a target="_back" href="https://facebook.com/profile.php?id=100014675749478">
						<i class="fas fa-circle fa-stack-2x facebook"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>
				</span>
			</span>
		</div>
	</nav>
	<!-- end of navbar -->
	<!-- end of navigation -->