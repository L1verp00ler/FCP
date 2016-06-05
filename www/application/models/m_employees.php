<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_employees extends CI_Model
{
    function get($d = 0)
    {
        $this->db->order_by("familiya", "ask");
        $this->db->order_by("name", "ask");
        $this->db->where('role', '1');
        $query = $this->db->get('personal');
        return $query->result_array();
    }

    function del($table, $param, $id)
    {
        $this->db->where($param, $id);
        $this->db->delete($table);
    }

    function add($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function update($table, $param, $id, $data)
    {
        $this->db->where($param, $id);
        $this->db->update($table, $data);
    }
}
