<?php

class Home extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->has_userdata('id') && $this->session->userdata('role_id') != 4) {
      redirect('auth');
    }

    $this->load->model('Home_Model');
    $this->load->model('Main_Model');

    $user = $this->Main_Model->dapatkanDataUser($this->session->userdata('id'));

    $this->data['username'] = $user['username'];

    $role = $this->Main_Model->dapatkanNamaRole($user['role_id']);

    $this->data['menu'] = $this->Main_Model->dapatkanMenu($user['role_id']);

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
    $this->form_validation->set_rules('judul', 'Judul', 'required', [
      'required' => 'Judul harus diisi'
    ]);
    $this->form_validation->set_rules('isi', 'Isi', 'required', [
      'required' => 'Isi tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $this->data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/sidebar');
      $this->load->view('pmb/pemberitahuan');
      $this->load->view('templates/footer');
    } else {
      $data = [
        'judul' => $this->input->post('judul'),
        'isi' => $this->input->post("isi"),
        'jenis' => "PSB"
      ];

      if ($this->Home_Model->tambahBeritaInformasi($data)) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil ditambahkan.</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Berita gagal ditambahkan.</div>');
      }

      redirect('home/berita_pemberitahuan');
    }
  }
}
