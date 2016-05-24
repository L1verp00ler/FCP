<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index()
	{		
		session_start();
		unset ($_SESSION['login']);
		unset ($_SESSION['familiya']);
		unset ($_SESSION['name']);
		unset ($_SESSION['otchestvo']);
		unset ($_SESSION['birthday']);
		unset ($_SESSION['adress']);
		unset ($_SESSION['passport']);
		unset ($_SESSION['id']);
		unset ($_SESSION['post']);
		unset ($_SESSION['zarplata']);
		unset ($_SESSION['role']);
	
		redirect('/');
	}
}