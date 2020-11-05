<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Work_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getWorks()
    {
		$this->db->from('works');
		$this->db->order_by('id','DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
}
