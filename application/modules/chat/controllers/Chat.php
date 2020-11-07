<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends MX_Controller
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

		if (empty($this->session->userdata('user_account'))) {
			redirect(base_url());
		}

		$this->load->model('chat_model', 'chat');
		$this->load->model('user');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('chat');
		$this->load->view('footer');
	}

	public function chat_submit()
	{

		$user_id = $this->session->userdata('user_account')['id'];
		
		$insert_data = [
			'user_id' => $user_id,
			'admin_id' => 0,
			'respondent' => $user_id,
			'respondent_status' => 'user',
			'comment' => $this->input->post('comment')
		]; 

		$this->db->insert('chat', $insert_data);

		$json['success'] = "success";

		echo json_encode($json);
	}

	public function chat_history()
	{
		$user_id = $this->session->userdata('user_account')['id'];

		$data['msgs'] = $this->chat->getComment($user_id);

		$this->load->view('chat_history', $data);
	}
}
