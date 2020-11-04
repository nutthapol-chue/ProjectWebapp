<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Work_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveWork()
    {   
        
        $this->db->insert('works');
    }
}
