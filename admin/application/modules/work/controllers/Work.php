<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Work extends MX_Controller
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

		if (empty($this->session->userdata('admin_account'))) {
			redirect(base_url('login'));
		}

		$this->load->model('work_model', 'work');
	}
	public function index()
	{
		$data['works'] = $this->work->getWorks();

		$this->load->view('header');
		$this->load->view('work', $data);
		$this->load->view('footer');
	}

	public function commitWork()
	{
		if($this->input->post()){

			$datetime = date("Y-m-d",strtotime($this->input->post('datetime')))."T".date("H:i",strtotime($this->input->post('datetime')));

				$update_data = [
					'datetime' => $datetime,
					'status' => 1
				];
				$this->db->where('id',$this->input->post('id'));
				if($this->db->update('works',$update_data)){
					$json['success'] = "อนุมัติสำเร็จ";
				}else{
					$json['error'] = "อนุมัติล้มเหลว";
				}
			
		}else{
			$json['error'] = "พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง";
		}
		echo json_encode($json);
	}

	public function uncommitWork()
	{
		if($this->input->post()){

				$update_data = [
					'status' => 0
				];
				$this->db->where('id',$this->input->post('id'));
				if($this->db->update('works',$update_data)){
					$json['success'] = "ยกเลิกอนุมัติสำเร็จ";
				}else{
					$json['error'] = "ยกเลิกอนุมัติล้มเหลว";
				}
			
		}else{
			$json['error'] = "พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง";
		}
		echo json_encode($json);
	}

	public function delWork()
	{
		if($this->input->post()){

				$this->db->where('id',$this->input->post('id'));
				if($this->db->delete('works')){
					$json['success'] = "ยกเลิกงานสำเร็จ";
				}else{
					$json['error'] = "ยกเลิกงานล้มเหลว";
				}
			
		}else{
			$json['error'] = "พบข้อผิดพลาดกรุณาลองใหม่อีกครั้ง";
		}
		echo json_encode($json);
	}
}
