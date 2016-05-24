<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Person extends CI_Controller {
	public function index($id = 0)
	{		
		session_start();
		$data['session'] = $_SESSION;
		$this->load->view('v_head',$data);
		if(isset($_SESSION['role'])){
			if($_SESSION['role'] == 2){
				if($id != 0)
				{
					$upd['status'] = 1;
					$this->m_employees->update('personal','id',$id,$upd);
					redirect('/person');
				}

					$data['persons'] = $this->m_employees->get();
					$this->load->view('v_person',$data);			
			}else redirect('/');
		}else redirect('/');		
	}
	
	public function del($id = 0)
	{
		session_start();
		if($_SESSION['role'] == 2){
			if($id != 0)
			{
				$this->m_employees->del('personal','id',$id);
				redirect('/person?info=1');
			}
		}else redirect('/person');
	}
}