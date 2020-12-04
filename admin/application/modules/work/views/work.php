<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-md-6 col-8 align-self-center">
			<h3 class="page-title mb-0 p-0">อนุมัติงาน</h3>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<!-- column -->
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">รายการ</h4>
					<h5 class="card-subtitle text-center"><code id="commitSubmit"></code></h5>
					<div class="table-responsive">
						<table class="table user-table">
							<thead>
								<tr>
									<th class="border-top-0">#</th>
									<th class="border-top-0">ชื่อ - นามสกุล</th>
									<th class="border-top-0">อีเมล</th>
									<th class="border-top-0">เบอร์โทร</th>
									<th class="border-top-0">หัวข้อ</th>
									<th class="border-top-0">ช่วงวันเวลา</th>
									<th class="border-top-0"></th>
									<th class="border-top-0">ตัวเลือก</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($works) { ?>
									<?php foreach ($works as $key => $work) { ?>
										<tr>
											<td><?= ++$key ?></td>
											<td><?= $work['fullname']; ?></td>
											<td><?= $work['email']; ?></td>
											<td><?= $work['phone']; ?></td>
											<td><?= $work['title']; ?></td>
											<td>
												<div class="form-group">
													<input type="datetime-local" class="form-control" id="datetime<?= $work['id']; ?>" value="<?= $work['datetime']; ?>" <?= $work['status'] == 1 || $work['status'] == 2 ? "readonly" : ''; ?>>
												</div>
											</td>
											<td><button class="btn btn-info mx-auto mx-md-0 text-white" onclick="detailFrom(<?= $work['id']; ?>);">รายละเอียด</button></td>
											<td>
												<?php if ($work['status'] == 0) { ?>
													<button class="btn btn-success mx-auto mx-md-0 text-white" onclick="commitFrom(<?= $work['id']; ?>,'datetime<?= $work['id']; ?>');">อนุมัติ</button>
													<button class="btn btn-danger mx-auto mx-md-0 text-white" onclick="delWork(<?= $work['id']; ?>);">ยกเลิกงาน</button>
												<?php } elseif ($work['status'] == 1) { ?>
													<button class="btn btn-danger mx-auto mx-md-0 text-white" onclick="uncommitFrom(<?= $work['id']; ?>);">ยกเลิกการอนุมัติ</button>
													<button class="btn btn-success mx-auto mx-md-0 text-white" onclick="successWork(<?= $work['id']; ?>);">เสร็จสิ้น</button>
												<?php } else { ?>
													<p style="color:green;">เสร็จสิ้นแล้ว !</p>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								<?php } else { ?>
									<tr>
										<td colspan="7" class="text-center">ไม่พบข้อมูล</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End PAge Content -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Right sidebar -->
	<!-- ============================================================== -->
	<!-- .right-sidebar -->
	<!-- ============================================================== -->
	<!-- End Right sidebar -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="workInfo_modal">

		</div>
	</div>
</div>
<script>
	function commitMSG(valid, msg) {
		if (valid) {
			addClass = "color-green";
		} else {
			addClass = "color-red";
		}
		$("#commitSubmit").text(msg).addClass(addClass);
	}

	function commitFrom(id, id_input) {
		event.preventDefault();
		var datetime = $("#" + id_input).val();

		$.ajax({
			type: "POST",
			url: js_base_url('work/commitwork'),
			data: "id=" + id + "&datetime=" + datetime,
			dataType: 'json',
			encode: true,
			success: function(text) {
				if (text.success) {
					commitMSG(true, text.success);
					setTimeout(function() {
						window.location.reload(1);
					}, 1000);
				} else {
					commitMSG(false, text.error);
				}
			}
		});
	}

	function uncommitFrom(id) {
		$.ajax({
			type: "POST",
			url: js_base_url('work/uncommitwork'),
			data: "id=" + id,
			dataType: 'json',
			encode: true,
			success: function(text) {
				if (text.success) {
					commitMSG(true, text.success);
					setTimeout(function() {
						window.location.reload(1);
					}, 1000);
				} else {
					commitMSG(false, text.error);
				}
			}
		});
	}

	function delWork(id) {
		confirm = confirm('คุณต้องการจะยกเลิกชิ้นงานนี้ใช่หรือไม่')
		if (confirm) {
			$.ajax({
				type: "POST",
				url: js_base_url('work/delwork'),
				data: "id=" + id,
				dataType: 'json',
				encode: true,
				success: function(text) {
					if (text.success) {
						commitMSG(true, text.success);
						setTimeout(function() {
							window.location.reload(1);
						}, 1000);
					} else {
						commitMSG(false, text.error);
					}
				}
			});
		}

	}

	function detailFrom(id) {
		$.ajax({
			type: "GET",
			url: js_base_url('work/detail'),
			data: "id=" + id,
			success: function(text) {
				document.getElementById("workInfo_modal").innerHTML = text
				$('#detailModal').modal('show')
			}
		});
	}

	function saveDetailFrom(id) {
		event.preventDefault();
		var detail = $("#detail_work").val();

		$.ajax({
			type: "POST",
			url: js_base_url('work/savedetail'),
			data: "id=" + id + "&detail=" + detail,
			dataType: 'json',
			encode: true,
			success: function(text) {
				if (text.success) {
					$("#detailSubmit").text(text.success).addClass('color-green');
				} else {
					$("#detailSubmit").text(text.error).addClass('color-red');
				}
			}
		});
	}

	function successWork(id) {
		$.ajax({
			type: "POST",
			url: js_base_url('work/success'),
			data: "id=" + id,
			dataType: 'json',
			encode: true,
			success: function(text) {
				if (text.success) {
					commitMSG(true, text.success);
					setTimeout(function() {
						window.location.reload(1);
					}, 1000);
				} else {
					commitMSG(false, text.error);
				}
			}
		});
	}
</script>
