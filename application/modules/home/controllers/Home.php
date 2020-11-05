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

		$data['carlendar'] = $this->calendar_events();

		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}

	public function request()
	{
		$this->load->model('work_model', 'work');

		if ($this->input->post()) {
			$post = $this->input->post();
			
			if ($this->work->saveWork($post)) {
				echo 'success';
			} else {
				echo 'กรุณากรอกข้อมูลให้ถูกต้อง';
			}
		} else {
			echo 'พบข้อผิดพลาดกรุณาลองใหม่อีกครับ';
		}
	}

	public function calendar_events()
	{
		$this->load->model('work_model', 'work');
		$result = $this->work->getWorks();
		foreach ($result as $data) {
			$json[] = [
				'title' => $data['title'],
				'start' => $data['datetime'],
			];
		}
		return count($result) > 0 ? json_encode($json) : '';	
	}
}
