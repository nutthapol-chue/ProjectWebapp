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
			<div class="row" id="selectUsers">

			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true" onclick="stopChat()">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="chatContent">

		</div>
	</div>
</div>

<script>
	// $(document).ready(function() {
	// 	selectUsers()
	// 	stopChat()
	// 	setInterval(function() {
	// 		selectUsers()
	// 	}, 3000);
	// 	setInterval(function() {
	// 		if (getCookie('chat_id') != null) {
	// 			chat_history(getCookie('chat_id'))
	// 		}
	// 	}, 3000);
	// });


	// function getCookie(cname) {
	// 	var name = cname + "=";
	// 	var decodedCookie = decodeURIComponent(document.cookie);
	// 	var ca = decodedCookie.split(';');
	// 	for (var i = 0; i < ca.length; i++) {
	// 		var c = ca[i];
	// 		while (c.charAt(0) == ' ') {
	// 			c = c.substring(1);
	// 		}
	// 		if (c.indexOf(name) == 0) {
	// 			return c.substring(name.length, c.length);
	// 		}
	// 	}
	// 	return "";
	// }

	// function selectUsers() {
	// 	$.ajax({
	// 		url: js_base_url('chat/selectusers'),
	// 		success: function(text) {
	// 			document.getElementById("selectUsers").innerHTML = text
	// 		}
	// 	});
	// }

	// function chatFrom(id) {
	// 	$.ajax({
	// 		type: "GET",
	// 		url: js_base_url('chat/chat_msg'),
	// 		data: "id=" + id,
	// 		success: function(text) {
	// 			document.getElementById("chatContent").innerHTML = text
	// 			chat_history(id)
	// 			document.cookie = "chat_id=" + id + ";"

	// 			$('#chatModal').modal('show')
	// 		}
	// 	});
	// }

	// function stopChat() {
	// 	document.cookie = "chat_id='';"
	// 	$('#chatModal').modal('hide')
	// }

	// function chat_history(id) {
	// 	$.ajax({
	// 		type: "GET",
	// 		url: js_base_url('chat/chat_history'),
	// 		data: "id=" + id,
	// 		success: function(text) {
	// 			if (text != 'error') {
	// 				document.getElementById("chat_history").innerHTML = text
	// 			}
	// 		}
	// 	});
	// }

	// function chat_submit(id) {
	// 	event.preventDefault();
	// 	var comment = $("#comment").val();

	// 	$.ajax({
	// 		type: "POST",
	// 		url: js_base_url('chat/chat_submit'),
	// 		data: "id=" + id + "&comment=" + comment,
	// 		dataType: 'json',
	// 		encode: true,
	// 		success: function(text) {
	// 			$("#comment").val("");
	// 			chat_history(id);
	// 		}
	// 	});
	// }
</script>