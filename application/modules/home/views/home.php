<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<header id="header" class="header">
	<div class="header-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="text-container">
						<h1>ห้างหุ้นส่วนจำกัด <span class="turquoise"><br> สรวิชญ์ พริ้นติ้ง</span> </h1>
						<p class="p-large">รับพิมพ์ภาพและติดตั้ง ต่างๆ เป็นธุรกิจด้านการออกแบบ ซึ่งจะมีบริการทางด้านการจัดทำสติ๊กเกอร์ แผ่นพับ นามบัตร ตรายาง ซองเอกสารและกล่องเอกสารทุกประเภท</p>
						<a class="btn-solid-lg page-scroll" href="#contact">ติดต่อ</a>
					</div>
					<!-- end of text-container -->
				</div>
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="image-container">
						<img class="img-fluid" src="/assets/images/header-teamwork.svg" alt="alternative">
					</div>
					<!-- end of image-container -->
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of header-content -->
</header>
<!-- end of header -->
<!-- end of header -->


<!-- Services -->
<div id="calendar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>ตารางงาน</h2>
			</div>
		</div>
		<div id="calendar_table">
		</div>
	</div>
</div>
<!-- end of cards-1 -->
<!-- end of services -->


<!-- end of details lightboxes -->



<!-- Request -->
<div id="request" class="form-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="text-container">
					<h2>นัดหมาย</h2>
					<img src="/assets/images/clock.png" style="width: 15rem;" alt="" srcset="">
				</div>
				<!-- end of text-container -->
			</div>
			<!-- end of col -->
			<div class="col-lg-6">

				<!-- Request Form -->
				<div class="form-container">
					<form id="requestForm" data-toggle="validator" data-focus="false">
						<div class="form-group">
							<input type="text" class="form-control-input" id="rname" name="rname" required>
							<label class="label-control" for="rname">ชื่อ - นามสกุล</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control-input" id="remail" name="remail" required>
							<label class="label-control" for="remail">อีเมล</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control-input" id="rphone" name="rphone" required>
							<label class="label-control" for="rphone">เบอร์โทร</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<select class="form-control-select" id="rselect" required>
								<option class="select-option" value="" disabled selected>ช่วงเวลา</option>
								<option class="select-option" value="Personal Loan"> -- </option>
							</select>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<button type="submit" class="form-control-submit-button">ส่งยืนยัน</button>
						</div>
						<div class="form-message">
							<div id="rmsgSubmit" class="h3 text-center hidden"></div>
						</div>
					</form>
				</div>
				<!-- end of form-container -->
				<!-- end of request form -->

			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of form-1 -->
<!-- end of request -->

<!-- About -->
<div id="about" class="basic-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>เกี่ยวกับ</h2>
				<p class="p-heading p-large">ทำการจดทำเบียนสำนักงานในวันที่ วันที่ 9 กุมภาพันธฺ พ.ศ.2558</p>
			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-lg-12">

				<!-- Team Member -->
				<div class="team-member">
					<div class="image-wrapper">
						<img class="img-fluid" src="/assets/images/porn.jpg" alt="alternative">
					</div>
					<!-- end of image-wrapper -->
					<p class="p-large"><strong>ชุลีพร งบกระโทก</strong></p>
					<!-- <p class="job-title">Business Developer</p> -->
					<span class="social-icons">
						<span class="fa-stack">
							<a target="_back" href="https://facebook.com/profile.php?id=100014675749478">
								<i class="fas fa-circle fa-stack-2x facebook"></i>
								<i class="fab fa-facebook-f fa-stack-1x"></i>
							</a>
						</span>
					</span>
					<!-- end of social-icons -->
				</div>
				<!-- end of team-member -->
				<!-- end of team member -->


			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of basic-4 -->
<!-- end of about -->


<!-- Contact -->
<div id="contact" class="form-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>ติดต่อ</h2>
				<ul class="list-unstyled li-space-lg">
					<li class="address">สามารถส่งข้อมูลการติดต่อกับเราได้ที่นี้</li>
					<li><i class="fas fa-map-marker-alt"></i>67/109 หมู่ที่ 1 ตำบลบางกร่าง อำเภอเมืองนนทบุรี จ.นนทบุรี</li>
					<li><i class="fas fa-phone"></i><a class="turquoise" href="tel:0935585554">093-558-5554</a></li>
					<!-- <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">office@evolo.com</a></li> -->
				</ul>
			</div>
			<!-- end of col -->
		</div>
		<!-- end of row -->
		<div class="row">
			<div class="col-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.2019199735564!2d100.47618515806882!3d13.814772247576695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29a4e5ca37cb5%3A0x79d61b20fe036c9d!2zVGhlIFBsZW5vIOC4nuC4o-C4sOC4o-C4suC4oTUt4Lib4Li04LmI4LiZ4LmA4LiB4Lil4LmJ4LiyIFRhbWJvbiBCYW5nIFNpIFRob25nLCBBbXBob2UgQmFuZyBLcnVhaSwgQ2hhbmcgV2F0IE5vbnRoYWJ1cmkgMTExMzA!5e0!3m2!1sen!2sth!4v1600332421943!5m2!1sen!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			</div>
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>
<!-- end of form-2 -->
<!-- end of contact -->


<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar_table');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			timeZone: 'GMT+7',
			locale: 'th',
			themeSystem: 'standard',
			headerToolbar: {
				right: 'prevYear,prev,today,next,nextYear',
				center: 'title',
				left: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'

			},
			footerToolbar: {
				center: '',
				right: 'prev,next'
			},
			weekNumbers: true,
			dayMaxEvents: true, // allow "more" link when too many events
			events: 'https://fullcalendar.io/demo-events.json'
		});

		calendar.render();
	});
</script>