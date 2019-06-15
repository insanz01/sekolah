<?php

class Auth extends CI_Controller
{
  private $data;

  public function __construct()
  {
    parent::__construct();

    if ($this->session->has_userdata('id')) {
      redirect('main');
    }

    $this->load->model('Auth_Model');
    $this->data['judul'] = "Sistem Sekolah";
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Username harus diisi'
    ]);

    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/templates/header', $this->data);
      $this->load->view('auth/login');
      $this->load->view('auth/templates/footer');
    } else {

      $user = [
        'username' => $this->input->post('username'),
        'password' => $this->input->post("password")
      ];

      if ($this->Auth_Model->login($user)) {
        redirect('home');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Ops.. Perika kembali username dan password anda.</div>');

        redirect('auth');
      }
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('id');
    $this->session->unset_userdata('role_id');

    redirect('auth');
  }
}
