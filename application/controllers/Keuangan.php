<?php

class Keuangan extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('id') && $this->session->userdata('role_id') != 5) {
      redirect('auth');
    }

    $this->load->model('Home_Model');

    $user = $this->Home_Model->dapatkanDataUser($this->session->userdata('id'));

    $this->data['username'] = $user['username'];

    $role = $this->Home_Model->dapatkanNamaRole($user['role_id']);

    $this->data['role'] = $role['nama'];

    $this->data['judul'] = "Sistem Sekolah";
  }

  public function index()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('keuangan/transaksi');
    $this->load->view('templates/footer');
  }

  public function psb()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('keuangan/transaksi_psb');
    $this->load->view('templates/footer');
  }
}
