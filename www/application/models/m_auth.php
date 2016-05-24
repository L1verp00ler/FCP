<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_auth extends CI_Model 
{  
    function get_p($id)
    {
		$this->db->where('id',$id);
        $query = $this->db->get('user');      	
        return $query->result_array();  
    }
	function get_p2($id)
    {
		$this->db->where('email',$id);
        $query = $this->db->get('user');      	
        return $query->result_array();  
    }
	
	function get_all()
    {
		$this->db->order_by('id', "ask"); 		
        $query = $this->db->get('user');      
        return $query->result_array();  
    }
	
	function get_all_s()
    {
		$this->db->order_by('id', "ask"); 		
        $query = $this->db->get('personal');      
        return $query->result_array();  
    }
    
	function get_s($id)
    {
		$this->db->where('id',$id);
        $query = $this->db->get('personal');         
        return $query->result_array();  
    }
    
    function get_doctor($id)
    {
		$this->db->where('role','1');
        $query = $this->db->get('personal');         
        return $query->result_array();  
    }
    
    function get_records($date = 0, $s_id = 0)
    {
    	if($date){
    		 $this->db->where('date',$date);
    		 $this->db->where('s_id',$s_id);
    	}
        $query = $this->db->get('record');         
        return $query->result_array();  
    }
    
    function get_schedule($id =0)
    {
		if($id) $this->db->where('s_id',$id);
        $query = $this->db->get('schedule');         
        return $query->result_array();  
    }
	
	
	function del($table,$param,$id)
    {
		$this->db->where($param,$id);
		$this->db->delete($table);
    }
	
	function check_user($email)
         {					
			$w = $this->db->where('email',$email)->limit(1)->get('user');
			if($w->num_rows > 0)
			{
				return true;
			} else return false;						
         }	
		 
		 function check_doctor($passport)
         {
            $q = $this->db->where('passport',$passport)->limit(1)->get('staff');					
			if($q->num_rows > 0)
			{
				return true;
			} else return false;						
         }
    
    function del_rec($post)
    {
		$this->db->where('s_id',$post['s_id']);
		$this->db->where('p_id',$post['p_id']);
		$this->db->where('time',$post['time']);
		$this->db->where('date',$post['date']);
		$this->db->delete('record');
    }
    
	 function del_rec1($post)
    {
		$this->db->where('p_id',$post['p_id']);
		$this->db->delete('record');
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