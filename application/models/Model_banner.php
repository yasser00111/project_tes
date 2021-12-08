<?php 

class Model_banner extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_banner');
    }
    public function Edit_data($where,$table)
    {
       return $this->db->get_where($table,$where);
    }
}