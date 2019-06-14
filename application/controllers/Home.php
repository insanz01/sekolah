<?php

class Home extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('id')) {
      redirect('auth');
    }

    $this->load->model('Home_Model');

    $user = $this->Home_Model->dapatkanDataUser($this->session->userdata('id'));

    $this->data['username'] = $user['username'];

    $role = $this->Home_Model->dapatkanNamaRole($user['role_id']);

    $this->data['menu'] = $this->Home_Model->dapatkanMenu($user['role_id']);

    $this->data['role'] = $role['nama'];

    $this->data['judul'] = "Sistem Sekolah";
  }

  public function index()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('dashboard/index');
    $this->load->view('templates/footer');
  }

  public function pendaftaran_murid()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('pmb/pendaftaran');
    $this->load->view('templates/footer');
  }

  public function seleksi_murid()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('pmb/seleksi');
    $this->load->view('templates/footer');
  }

  public function penempatan_murid()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('pmb/penempatan');
    $this->load->view('templates/footer');
  }

  public function berita_pemberitahuan()
  {
    $this->load->view('templates/header', $this->data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/sidebar');
    $this->load->view('pmb/pemberitahuan');
    $this->load->view('templates/footer');
  }
}
