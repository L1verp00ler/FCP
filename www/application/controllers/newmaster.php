<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newmaster extends CI_Controller
{
    public function index()
    {
        session_start();
        $data['session'] = $_SESSION;
        $this->load->library('form_validation');
        $this->load->view('v_head', $data);
        $this->load->view('v_newmaster');

    }

    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Имя', 'required|min_length[2]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('familiya', 'Фамилия', 'required|min_length[5]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('stag', 'Возраст', 'required|min_length[1]|max_length[2]|xss_clean');
        if ($this->form_validation->run() !== false) {
            if (preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['name']) ||
                preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['familiya']) ||
                preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['stag'])
            ) {
                session_start();
                $data['session'] = $_SESSION;
                $this->load->view('v_head', $data);
                $this->load->view('v_newmaster');
                echo "<script>alert('Использованы недопустимые символы');</script>";
            }
            $data = $_POST;
            $data['role'] = 1;
            $this->m_employees->add('personal', $data);
            redirect("/person");

        } else {
            session_start();
            $data['session'] = $_SESSION;
            $this->load->view('v_head', $data);
            $this->load->view('v_newmaster');
        }
    }
}


