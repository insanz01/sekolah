<?php

class Main extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->has_userdata('id')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $role_id = $this->session->userdata('role_id');

    switch ($role_id) {
      case 1:
        redirect('guru');
        break;
      case 2:
        redirect('wali_murid');
        break;
      case 3:
        redirect('wali_kelas');
        break;
      case 4:
        redirect('home');
        break;
      case 5:
        redirect('keuangan');
        break;
      case 6:
        redirect('murid');
        break;
      case 7:
        // merupakan admin yang dikhususkan untuk TU serba bisa, kepsek dan wakilnya
        redirect('umum');
        break;
      default:
        redirect('auth');
    }
  }
}
