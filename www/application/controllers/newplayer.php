<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Newplayer extends CI_Controller
{
    public function index()
    {
        session_start();
        $data['session'] = $_SESSION;
        $this->load->library('form_validation');
        $this->load->view('v_head', $data);
        $this->load->view('v_newplayer');

    }

    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Имя', 'required|min_length[2]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'required|min_length[5]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('age', 'Возраст', 'required|min_length[1]|max_length[2]|xss_clean');
        if ($this->form_validation->run() !== false) {
            if (preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['firstname']) ||
                preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['lastname']) ||
                preg_match("/[\'|\<|\>|\"|\!|\?|\$|\@|\#|\%|\^|\&|\~|\*|\+|\_|\:|\;|\`|\=]/", $_POST['age'])
            ) {
                session_start();
                $data['session'] = $_SESSION;
                $this->load->view('v_head', $data);
                $this->load->view('v_newplayer');
                //echo "<script>alert('Использованы недопустимые символы');</script>";
                redirect("/players?message=1");
            }
            //$data = $_POST;
            //$data['role'] = 1;
            //$this->m_employees->add('personal', $data);
            $query = "INSERT INTO players (player_id, firstname, lastname, age, position_id)
                      VALUES ('" . $_POST['player_id'] . "', '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['age'] . "', '" . $_POST['position_id'] . "');";
            $result = mysql_query($query);
            //var_dump($result);
            //exit;
            redirect("/players");

        } else {
            session_start();
            $data['session'] = $_SESSION;
            $this->load->view('v_head', $data);
            $this->load->view('v_newplayer');
        }
    }
}


