<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getComment($id)
    {
        $this->db->from('chat');
        $this->db->where('user_id',$id);
		$query = $this->db->get();
        $result = $query->result_array();
        
        $this->db->set('status','1');
        $this->db->where('user_id',$id);
        $this->db->where('respondent',$id);
        $this->db->where('respondent_status','admin');
        $this->db->update('chat');
		return $result;
    }
    public function getCommentCount($id)
    {
        $this->db->from('chat');
        $this->db->where('user_id',$id);
        $this->db->where('status',0);
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result;
    }

}
