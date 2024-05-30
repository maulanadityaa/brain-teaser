<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Word_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_random_word()
    {
        $this->db->order_by('id', 'RANDOM');
        $query = $this->db->get('master_kata', 1);
        return $query->row();
    }
}
