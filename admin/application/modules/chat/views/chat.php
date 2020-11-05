<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-md-6 col-8 align-self-center">
			<h3 class="page-title mb-0 p-0">แชท</h3>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-2">
					<button class="btn btn-success btn-block mx-auto mb-2 text-white" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-account"></i> Nutthapol</button>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nutthapol</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text-left">
					<div class="text-left">
						<strong class="mr-auto">Nutthapol</strong>
					</div>
					<div class="toast-body">
						Hello, world! This is a toast message.
					</div>
				</div>
				<div class="text-right">
					<div class="text-right">
						<strong class="mr-auto">You</strong>
					</div>
					<div class="toast-body">
						Hello, world! This is a toast message.
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="ข้อความ" aria-label="ข้อความ" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button type="button" class="btn btn-primary">ส่ง</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
