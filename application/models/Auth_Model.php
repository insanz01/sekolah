<?php

class Auth_Model extends CI_Model
{
  public function login($data)
  {
    $user = $this->db->get_where('user', ['username' => $data['username']])->row_array();

    if ($user) {
      if (password_verify($data['password'], $user['password'])) {
        $this->session->set_userdata('id', $user['id']);
        $this->session->set_userdata('role_id', $user['role_id']);

        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
