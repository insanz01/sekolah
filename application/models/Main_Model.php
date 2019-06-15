<?php

class Main_Model extends CI_Model
{
  public function dapatkanMenu($id)
  {
    $this->db->select('*');
    $this->db->from('menu');
    $this->db->where('role_id', $id);
    $this->db->where('active', 1);
    $this->db->order_by('urutan', 'asc');
    return $this->db->get()->result_array();
  }

  public function dapatkanDataUser($id)
  {
    return $this->db->get_where('user', ['id' => $id])->row_array();
  }

  public function dapatkanNamaRole($id)
  {
    return $this->db->get_where('role_user', ['id' => $id])->row_array();
  }
}
