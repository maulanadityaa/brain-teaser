<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Point_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_score($data)
    {
        $this->db->insert('point_game', $data);
    }
}
