<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Modal -->
<!-- Login -->
<div id="login" class="lightbox-basic zoom-anim-dialog mfp-hide">
	<div class="container">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
				<div class="image-container">
					<img class="img-fluid" src="/assets/images/logo.png" alt="alternative">
				</div>
				<!-- end of image-container -->
			</div>
			<!-- end of col -->
			<div class="col-lg-4">
				<h3>ล็อกอิน</h3>
				<hr>
				<form id="loginForm" data-toggle="validator" data-focus="false">
					<div class="form-group">
						<a href="<?= $authURL ?>">ss</a>
					</div>
					<div class="form-group">
						<input type="email" class="form-control-input" id="cemail" required>
						<label class="label-control" for="cemail">อีเมล</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="password" class="form-control-input" id="cpass" required>
						<label class="label-control" for="cpass">รหัสผ่าน</label>
						<div class="help-block with-errors"></div>
					</div>

					<div class="form-message">
						<div id="cmsgSubmit" class="h3 text-center hidden"></div>
					</div>

					<a class="btn-solid-reg mfp-close page-scroll">ยืนยัน</a> <a class="btn-outline-reg as-button popup-with-move-anim" href="#register">สมัครสมาชิก</a>
				</form>
			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of Login -->
<!-- Register -->
<div id="register" class="lightbox-basic zoom-anim-dialog mfp-hide">
	<div class="container">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-7">

				<div class="image-container">
					<img class="img-fluid" src="/assets/images/logo.png" alt="alternative">
				</div>
				<!-- end of image-container -->
			</div>
			<!-- end of col -->
			<div class="col-lg-5">
				<h3>สมัครสมาชิก</h3>
				<hr>
				<form id="registerForm" data-toggle="validator" data-focus="false">
					<div class="form-group">
						<input type="text" class="form-control-input" id="cname" data-error="กรุณากรอก ชื่อ - นามสกุล" required>
						<label class="label-control" for="cname">ชื่อ - นามสกุล</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="email" class="form-control-input" id="cemail" required>
						<label class="label-control" for="cemail">อีเมล</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="password" class="form-control-input" id="cpass" required>
						<label class="label-control" for="cpass">รหัสผ่าน</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="password" class="form-control-input" id="re_cpass" required>
						<label class="label-control" for="cpass">ยืนยันรหัสผ่าน</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group checkbox custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="cterms" value="Agreed-to-Terms" required>
						<label for="cterms" class="custom-control-label"></label>I have read and agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-message">
						<div id="cmsgSubmit" class="h3 text-center hidden"></div>
					</div>

					<a class="btn-solid-reg mfp-close page-scroll" href="#request">ยืนยันการสมัครสมาชิก</a> <a class="btn-outline-reg as-button popup-with-move-anim" href="#login">ล็อกอิน</a>
				</form>
			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of Register -->
<!-- end of Modal -->
<!-- Footer -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="footer-col">
					<h4>เกี่ยวกับ</h4>
					<p>รับพิมพ์ภาพและติดตั้ง ต่างๆ เป็นธุรกิจด้านการออกแบบ ซึ่งจะมีบริการทางด้านการจัดทำสติ๊กเกอร์ แผ่นพับ นามบัตร ตรายาง ซองเอกสารและกล่องเอกสารทุกประเภท</p>
				</div>
			</div>
			<!-- end of col -->
			<!-- <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> -->
			<!-- end of col -->
			<div class="col-md-4">
				<div class="footer-col last">
					<h4>สื่อสังคม</h4>
					<span class="fa-stack">
						<a target="_back" href="https://facebook.com/profile.php?id=100014675749478">
							<i class="fas fa-circle fa-stack-2x"></i>
							<i class="fab fa-facebook-f fa-stack-1x"></i>
						</a>
					</span>

				</div>
			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="p-small">Copyright © 2020 All rights reserved</p>
			</div>
			<!-- end of col -->
		</div>
		<!-- enf of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="/assets/js/popper.min.js"></script>
<!-- Popper tooltip library for Bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Bootstrap framework -->
<script src="/assets/js/jquery.easing.min.js"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="/assets/js/swiper.min.js"></script>
<!-- Swiper for image and text sliders -->
<script src="/assets/js/jquery.magnific-popup.js"></script>
<!-- Magnific Popup for lightboxes -->
<script src="/assets/js/validator.js"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="/assets/fullcalendar/main.js"></script>
<script src="/assets/fullcalendar/locales-all.js"></script>
<!-- calendar -->
<script src="/assets/js/scripts.js"></script>
<!-- Custom scripts -->

</body>

</html>
