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

		if (empty($this->session->userdata('admin_account'))) {
			redirect(base_url('login'));
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
	public function selectusers()
	{
		$data['users'] =  $this->user->getUsers();
		$this->load->view('select_users',$data);
	}

	public function chat_msg()
	{

		$data['msgs'] = $this->chat->getComment($this->input->get('id'));
		$data['user'] =  $this->user->getUser($this->input->get('id'));

		$this->load->view('chat_msg', $data);
	}

	public function chat_submit()
	{

		$admin_id = $this->session->userdata('admin_account')['id'];
		
		$insert_data = [
			'user_id' => $this->input->post('id'),
			'admin_id' => $admin_id,
			'respondent' => $admin_id,
			'respondent_status' => 'admin',
			'comment' => $this->input->post('comment')
		]; 

		$this->db->insert('chat', $insert_data);

		$json['success'] = "success";

		echo json_encode($json);
	}

	public function chat_history()
	{

		$data['msgs'] = $this->chat->getComment($this->input->get('id'));
		$data['user'] =  $this->user->getUser($this->input->get('id'));

		$this->load->view('chat_history', $data);
	}
}
