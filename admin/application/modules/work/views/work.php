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
									<th class="border-top-0">ตัวเลือก</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($works) { ?>
									<?php foreach ($works as $key => $work) { ?>
										<tr>
											<td><?= $key ?></td>
											<td><?= $work['fullname']; ?></td>
											<td><?= $work['email']; ?></td>
											<td><?= $work['phone']; ?></td>
											<td><?= $work['title']; ?></td>
											<td><?= $work['datetime']; ?></td>
											<td><?= $work['status']; ?></td>
											<td></td>
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