<!DOCTYPE html>
<html lang="th">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<title>Admin</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
	<!-- Favicon icon -->
	<!-- <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png"> -->
	<!-- chartist CSS -->
	<link href="<?= base_url('assets/plugins/chartist-js/dist/chartist.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/chartist-js/dist/chartist-init.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
	<!--This page css - Morris CSS -->
	<link href="<?= base_url('assets/plugins/c3-master/c3.min.css'); ?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/style.min.css'); ?>" rel="stylesheet">
	<script src="<?= base_url('assets/plugins/jquery/dist/jquery.min.js'); ?>"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url('assets/plugins/popper.js/dist/umd/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/app-style-switcher.js'); ?>"></script>
	<!--c3 JavaScript -->
	<script src="<?= base_url('assets/js/validator.js'); ?>"></script>
	<!--Custom JavaScript -->
	<script src="<?= base_url('assets/js/ajex.js'); ?>"></script>
</head>

<body style="background-color: #EEF5F9;">

	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Sales chart -->
		<!-- ============================================================== -->
		<div class="row  d-flex justify-content-center" style="margin-top: 10%;">
			<!-- Column -->
			<div class="col-lg-4 col-md-5 ">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">Login</h3>
						<form id="loginForm" method="post" data-toggle="validator" data-focus="false">
							<div class="form-group">
								<label for="a_email">Email address</label>
								<input type="email" class="form-control" name="a_email" id="a_email" aria-describedby="emailHelp" required>
							</div>
							<div class="form-group">
								<label for="a_pass">Password</label>
								<input type="password" class="form-control" name="a_pass" id="a_pass" required>
							</div>
							<div class="form-group">
								<small id="loginSubmit" class="form-text" style="color:red;"></small>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
						</form>
					</div>
					<div>
						<hr class="m-t-0 m-b-0">
					</div>
					<div class="card-body text-center ">
						© 2020
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$("#loginForm").validator().on("submit", function(event) {
			if (event.isDefaultPrevented()) {
				// handle the invalid form...
				lsubmitMSG("กรุณากรอกข้อมูลให้ถูกต้อง !");
			} else {
				// everything looks good!
				event.preventDefault();
				lsubmitForm();
			}
		});

		function lsubmitForm() {
			// initiate variables with form content
			var email = $("#a_email").val();
			var pass = $("#a_pass").val();
			$.ajax({
				type: "POST",
				url: js_base_url('auth/login'),
				data: "a_email=" + email + "&a_pass=" + pass,
				dataType: 'json',
				encode: true,
				success: function(text) {
					if (text.success) {
						lformSuccess();
						setTimeout(function() {
							window.location.reload(1);
						}, 1000);
					} else {
						lsubmitMSG(text.error);
					}
				}
			});
		}

		function lformSuccess() {
			$("#loginForm")[0].reset();
			lsubmitMSG("เข้าสู่ระบบสำเร็จ !");
			$("input").removeClass('notEmpty'); // resets the field label after submission
		}

		function lsubmitMSG(msg) {
			$("#loginSubmit").text(msg);
		}
	</script>


</body>

</html>