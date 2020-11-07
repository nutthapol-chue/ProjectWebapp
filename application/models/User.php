<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->tableName = 'users';
	}

	/*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
	public function checkUser($userData = array())
	{
		if (!empty($userData)) {
			//check whether user data already exists in database with same oauth info
			$this->db->select('*');
			$this->db->from($this->tableName);
			$this->db->where(array('oauth_provider' => $userData['oauth_provider'], 'oauth_uid' => $userData['oauth_uid']));
			$prevQuery = $this->db->get();
			$prevCheck = $prevQuery->num_rows();

			if ($prevCheck > 0) {
				$prevResult = $prevQuery->row_array();

				//update user data
				$userData['modified'] = date("Y-m-d H:i:s");
				$update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));

				//get user ID
				$userID = $prevResult['id'];
			} else {
				//insert user data
				$userData['created']  = date("Y-m-d H:i:s");
				$userData['modified'] = date("Y-m-d H:i:s");
				$insert = $this->db->insert($this->tableName, $userData);

				//get user ID
				$userID = $this->db->insert_id();

				$this->db->from($this->tableName);
				$this->db->where(array('id' => $userID));
				$prevQuery = $this->db->get();
				$prevResult = $prevQuery->row_array();
			}
		}
		if ($userID) {
			$this->session->set_userdata('user_account', $prevResult);
		}

		//return user ID
		return $userID ? $userID : FALSE;
	}
	public function checkuser_normal($userData = [])
	{
		if (!empty($userData)) {
			$this->db->select('*');
			$this->db->from($this->tableName);
			$this->db->where(array('email' => $userData['c_email']));
			$prevQuery = $this->db->get();
			$prevCheck = $prevQuery->num_rows();

			if ($prevCheck > 0) {
				return FALSE;
			} else {
				$insert_user = [
					'oauth_provider' => 'normal',
					'oauth_uid' => hexdec(uniqid()),
					'first_name' => $userData['c_fname'],
					'last_name' => $userData['c_lname'],
					'email' => $userData['c_email'],
					'password' => $userData['c_pass']
				];

				$this->db->insert($this->tableName, $insert_user);
				$this->db->insert_id();
				return TRUE;
			}
		}
	}

	public function getUsers()
	{
		$this->db->from('users');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function getAdmin($id)
	{
		$this->db->from('admin');
        $this->db->where('id',$id);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
}
