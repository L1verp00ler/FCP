<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Players extends CI_Controller
{
    public function index($id = 0)
    {
        session_start();
        $data['session'] = $_SESSION;
        $this->load->view('v_head', $data);
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 2) {
                /*
                if ($id != 0) {
                    $upd['status'] = 1;
                    //var_dump($upd);
                    //exit;
                    $this->m_employees->update('personal', 'id', $id, $upd);
                    redirect('/players');
                }
                */
                //$data['persons'] = $this->m_employees->get();
                //var_dump($data);
                //exit;
                //$this->load->view('v_players', $data);
                $this->load->view('v_players');
            } else redirect('/');
        } else redirect('/');
    }

    public function del($id = 0)
    {
        session_start();
        if ($_SESSION['role'] == 2) {
            if ($id != 0) {
                //$this->m_employees->del('personal', 'id', $id);
                $query = "DELETE FROM players WHERE player_id=".$id;
                $result = mysql_query($query) or die(mysql_error());
                //var_dump($result);
                //exit;
                redirect('/players?info=1');
            }
        } else redirect('/players');
    }
}