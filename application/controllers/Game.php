<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Word_Model');
        $this->load->model('Point_Model');
        $this->load->helper('url');
    }

    public function index()
    {
        $word_data = $this->Word_Model->get_random_word();
        // var_dump($word_data);

        $word = $word_data->kata;
        $clue = $word_data->clue;
        $data['word'] = $word;
        $data['clue'] = $clue;
        $this->load->view('game_view', $data);
    }

    public function check_word()
    {
        $word = $this->input->post('word');
        $user_input = $this->input->post('user_input');
        $score = 0;

        for ($i = 0; $i < strlen($word); $i++) {
            if ($i == 2 || $i == 6) {
                continue;
            }

            if ($word[$i] == strtoupper($user_input[$i])) {
                if ($i == 2 || $i == 6) {
                    $score += 0;
                }
                $score += 10;
            } else {
                $score -= 2;
            }
        }

        $data['score'] = $score;
        $data['word'] = $word;
        $this->load->view('result_view', $data);
    }

    public function save_score()
    {
        $name = $this->input->post('name');
        $score = $this->input->post('score');

        $savePoint = array(
            'total_poin' => $score,
            'nama_user' => $name
        );
        var_dump($savePoint);

        $this->Point_Model->save_score($savePoint);

        redirect('game');
    }
}
