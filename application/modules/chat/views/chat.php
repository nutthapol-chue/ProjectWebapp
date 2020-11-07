<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

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
									<div class="media-body">หลังจากส่งข้อความแล้วจะตอบกลับภายใน 24 ชม.</div>
								</li>
							</ul>
						</div>
					</div> <!-- end of row -->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body" style="height: 400px;">
									<div class="text-left">
										<div class="text-left">
											<strong class="mr-auto">Admin</strong>
										</div>
										<div class="toast-body">
											sss
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



<div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true" onclick="stopChat()">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="chatContent">

		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		selectUsers()
		stopChat()
		setInterval(function() {
			selectUsers()
		}, 3000);
		setInterval(function() {
			if (getCookie('chat_id') != null) {
				chat_history(getCookie('chat_id'))
			}
		}, 3000);
	});


	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}

	function selectUsers() {
		$.ajax({
			url: js_base_url('chat/selectusers'),
			success: function(text) {
				document.getElementById("selectUsers").innerHTML = text
			}
		});
	}

	function chatFrom(id) {
		$.ajax({
			type: "GET",
			url: js_base_url('chat/chat_msg'),
			data: "id=" + id,
			success: function(text) {
				document.getElementById("chatContent").innerHTML = text
				chat_history(id)
				document.cookie = "chat_id=" + id + ";"

				$('#chatModal').modal('show')
			}
		});
	}

	function stopChat() {
		document.cookie = "chat_id='';"
		$('#chatModal').modal('hide')
	}

	function chat_history(id) {
		$.ajax({
			type: "GET",
			url: js_base_url('chat/chat_history'),
			data: "id=" + id,
			success: function(text) {
				if (text != 'error') {
					document.getElementById("chat_history").innerHTML = text
				}
			}
		});
	}

	function chat_submit(id) {
		event.preventDefault();
		var comment = $("#comment").val();

		$.ajax({
			type: "POST",
			url: js_base_url('chat/chat_submit'),
			data: "id=" + id + "&comment=" + comment,
			dataType: 'json',
			encode: true,
			success: function(text) {
				$("#comment").val("");
				chat_history(id);
			}
		});
	}
</script>