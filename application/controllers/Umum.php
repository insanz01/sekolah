<?php

class Umum extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/dashboard');
    $this->load->view('templates/footer');
  }

  public function murid()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/murid');
    $this->load->view('templates/footer');
  }

  public function guru()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/guru');
    $this->load->view('templates/footer');
  }

  public function matapelajaran()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/matapelajaran');
    $this->load->view('templates/footer');
  }

  public function staff()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/staff');
    $this->load->view('templates/footer');
  }

  public function kelas()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/kelas');
    $this->load->view('templates/footer');
  }

  public function pembayaran()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/pembayaran');
    $this->load->view('templates/footer');
  }

  public function keuangan()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('umum/keuangan');
    $this->load->view('templates/footer');
  }
}
