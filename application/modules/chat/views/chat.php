<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	#chat_history {
		height: 300px;
		overflow-y: scroll;
		overflow: auto
	}
</style>
<header id="header" class="ex-header">
	<div class="header-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="text-container">
						<h1>แชทกับผู้ดูแล </h1>
					</div>
				</div>
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of header-content -->
</header>

<div class="ex-basic-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="text-container">
					<div class="row">
						<div class="col-12">
							<ul class="list-unstyled li-space-lg indent">
								<li class="media">
									<i class="fas fa-square"></i>
									<div class="media-body">สามารถสอบถามหรือพูดคุยเกี่ยวกับหัวข้องานได้เลย</div>
								</li>
								<li class="media">
									<i class="fas fa-square"></i>
									<div class="media-body">หลังจากส่งข้อความแล้วจะตอบกลับภายใน 24 ชม.</div>
								</li>
							</ul>
						</div>
					</div> <!-- end of row -->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body chat_history" style="height: 400px;" id="chat_history">
								</div>
								<div class="card-footer text-muted">
									<div class="input-group mb-3">
										<input type="text" class="form-control" id="comment" placeholder="ข้อความ" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button type="button" class="btn btn-primary" onclick="chat_submit()">ส่ง</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end of col-->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of ex-basic-2 -->
<!-- end of privacy content -->

<script>
	/* Chat */
	var scrolled = false;

	$(document).ready(function() {

		chat_history()

		setInterval(function() {
			if (!scrolled) {
				updateScroll()
			}
			chat_history()
		}, 1000);
	});

	function updateScroll() {
		if (!scrolled) {
			var element = document.getElementById("chat_history");
			element.scrollTop = element.scrollHeight;
			scrolled = true
		}
	}

	$("#yourDivID").on('scroll', function() {
		scrolled = true;
	});


	function chat_history() {
		$.ajax({
			url: js_base_url('chat/chat_history'),
			success: function(text) {
				if (text != 'error') {
					document.getElementById("chat_history").innerHTML = text
				}
			}
		});
	}

	function chat_submit() {
		event.preventDefault();
		var comment = $("#comment").val();

		$.ajax({
			type: "POST",
			url: js_base_url('chat/chat_submit'),
			data: "comment=" + comment,
			dataType: 'json',
			encode: true,
			success: function(text) {
				$("#comment").val("");
				chat_history(id);
			}
		});
	}
</script>