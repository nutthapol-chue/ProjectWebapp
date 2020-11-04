
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MX_Controller
{
	function __construct()
	{
		parent::__construct();

		// Load user model 
		$this->load->model('user');
	}


	public function login()
	{
		if ($this->input->post()) {
			$userData = $this->input->post();

			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where(array('email' => $userData['a_email'], 'password' => $userData['a_pass']));
			$prevQuery = $this->db->get();
			$prevCheck = $prevQuery->num_rows();

			if ($prevCheck > 0) {
				$prevResult = $prevQuery->row_array();
				$this->session->set_userdata('admin_account', $prevResult);
				$json['success'] = 'success';
			} else {
				$json['error'] = 'อีเมลหรือรหัสผ่านผิด';
			}
		} else {
			$json['error'] = 'พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง';
		}
		echo json_encode($json);
	}
	public function register()
	{
		if ($this->input->post()) {
			$userData = $this->input->post();
			if ($userData['a_pass'] == $userData['re_a_pass']) {
				if ($this->user->checkuser_normal($userData)) {
					echo 'success';
				} else {
					echo 'มีผู้ใช้อีเมลนี้แล้ว';
				}
			} else {
				echo 'รหัสผ่านไม่ตรงกัน';
			}
		} else {
			echo 'พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง';
		}
	}

	public function logout()
	{
		// Remove user data from session 
		$this->session->unset_userdata('admin_account');
		// Redirect to login page 
		redirect(base_url(''));
	}
}
