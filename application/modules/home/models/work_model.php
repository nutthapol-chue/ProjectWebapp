<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Work_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function saveWork($data = [])
	{

		$datetime = date("Y-m-d", strtotime($data['datetime'])) . "T" . date("H:i", strtotime($data['datetime']));

		$insertdata = [
			'title' => $data['title'],
			'fullname' => $data['fullname'],
			'email' => $data['email'],
			'phone' => $data['phone'],
			'status' => 0,
			'datetime' => $datetime,
		];

		$this->db->insert('works', $insertdata);

		$id = $this->db->insert_id();

		return $id ? true : false;
	}

	public function getWorks()
	{
		$this->db->from('works');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
}
