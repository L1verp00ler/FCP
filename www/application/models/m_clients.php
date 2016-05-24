<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_clients extends CI_Model 
{  
    function get()
    {
		$this->db->order_by("familiya", "ask"); 
		$this->db->order_by("name", "ask"); 
        $query = $this->db->get('user'); 
        return $query->result_array();  
    }
	
    function search($post)
    {
		$this->db->order_by("familiya", "ask"); 
		$this->db->order_by("name", "ask"); 
		$this->db->order_by("otchestvo", "ask"); 
		
		$this->db->like('familiya',$post['familiya']);
		$this->db->or_like('otchestvo',$post['otchestvo']);
		$this->db->or_like('name',$post['name']);
		$this->db->or_like('adress',$post['adress']);
		$this->db->or_like('passport',$post['passport']);
		
        $query = $this->db->get('pacients'); 
        return $query->result_array();  
    }
	
	function del($table,$param,$id)
    {
		$this->db->where($param,$id);
		$this->db->delete($table);
    }
	function add($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	function update($table,$param,$id,$data)
	{
		$this->db->where($param, $id);
		$this->db->update($table, $data); 
	}
}