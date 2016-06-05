<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
    public function index($id = 0)
    {
        session_start();
        $data['session'] = $_SESSION;
        $this->load->view('v_head', $data);
        $this->load->view('v_news');
    }
}
	