<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Authentication extends MX_Controller
{
	function __construct()
	{
		parent::__construct();

		// Load facebook oauth library 
		$this->load->library('facebook');

		// Load user model 
		$this->load->model('user');
	}

	public function login_fb()
	{
		$userData = array();

		// Authenticate user with facebook 
		if ($this->facebook->is_authenticated()) {
			// Get user info from facebook 
			$fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');

			// Preparing data for database insertion 
			$userData['oauth_provider'] = 'facebook';
			$userData['oauth_uid']    = !empty($fbUser['id']) ? $fbUser['id'] : '';;
			$userData['first_name']    = !empty($fbUser['first_name']) ? $fbUser['first_name'] : '';
			$userData['last_name']    = !empty($fbUser['last_name']) ? $fbUser['last_name'] : '';
			$userData['email']        = !empty($fbUser['email']) ? $fbUser['email'] : '';
			$userData['gender']        = !empty($fbUser['gender']) ? $fbUser['gender'] : '';
			$userData['picture']    = !empty($fbUser['picture']['data']['url']) ? $fbUser['picture']['data']['url'] : '';
			$userData['link']        = !empty($fbUser['link']) ? $fbUser['link'] : 'https://www.facebook.com/';

			// Insert or update user data to the database 
			$userID = $this->user->checkUser($userData);

			// Check user data insert or update status 
			if (!empty($userID)) {
				$data['userData'] = $userData;

				// Store the user profile info into session 
				
				redirect(base_url(''));
			} else {
				redirect(base_url(''));
			}
		}
	}

	public function login()
	{
		
	}
	public function register()
	{
		if ($this->input->post()) {
			$userData = $this->input->post();
			if ($userData['c_pass'] == $userData['re_c_pass']) {
				if ($this->user->checkuser_normal($userData)) {
					echo 'success';
				} else {
					echo 'มีผู้ใช้อีเมลนี้แล้ว';
				}
			} else {
				echo 'รหัสผ่านไม่ตรงกัน';
			}
		}else{
			echo 'พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง';
		}
	}

	public function logout()
	{
		// Remove local Facebook session 
		$this->facebook->destroy_session();
		// Remove user data from session 
		$this->session->unset_userdata('user_account');
		// Redirect to login page 
		redirect(base_url(''));
	}
}
