<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{	
		parent::__construct();
		$this->load->library('facebook');
	}
	public function index()
	{
		$data['authURL'] =  $this->facebook->login_url();

		if(!empty($_POST['register'])){
			$data['modal'] = json_encode($this->register());
		}

		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}
	
	public function register(){
		if ($_POST) {
			$userData = $_POST;
			if ($userData['c_pass'] == $userData['re_c_pass']) {
				if ($this->user->chechUser_normal($userData)) {
					return 'สมัครสมาชิคสำเร็จ';
				}else{
					return 'มีผู้ใช้อีเมลนี้แล้ว';
				}
			} else {
				return 'รหัสผ่านไม่ตรงกัน';
			}
		}
	}
}