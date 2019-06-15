<?php

class Home_Model extends CI_Model
{
  public function dapatkanDataPendaftar()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->join('user', 'pendaftar.user_id = user.id');
    return $this->db->get()->result_array();
  }

  public function dapatkanDataSeleksi()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->join('user', 'pendaftar.user_id = user.id');
    $this->db->where('status', 3);
    $this->db->get()->result_array();
  }

  public function prosesPenempatanKelas()
  {
    // menentukan jumlah murid nya
    // menentukan ketersediaan kelas
    // lakukan pembagian secara matematis (jumlah murid / jumlah kelas)
    // lakukan pembagian dengan mengurutkan hasil dari ranking saat seleksi
    // bagi dengan rumus diatas
    // masukan setiap row data ke dalam kelas masing2
  }

  public function dapatkanDataPenempatan()
  {
    $this->db->select('*');
    $this->db->from('murid');
    $this->db->where('semester', 1);
    return $this->db->get()->result_array();
  }

  public function dapatkanBeritaInformasi()
  {
    $this->db->select('*');
    $this->db->from('pemberitahuan');
    $this->db->where('jenis', 'PSB');
    return $this->db->get()->result_array();
  }

  public function tambahBeritaInformasi($data)
  {
    return $this->db->insert('pemberitahuan', $data);
  }

  public function dapatkanJumlahPendaftar()
  {
    return $this->db->get('pendaftar')->num_rows();
  }

  public function dapatkanJumlahTerbayar()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->where('status != 1');
    return $this->db->get()->num_rows(); // coba gunakan count_all_results()
  }

  public function dapatkanJumlahLulusTes()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->where('status > 3 ');
    return $this->db->get()->num_rows();
  }

  public function dapatkanJumlahGagal()
  {
    $this->db->select('*');
    $this->db->from('pendaftar');
    $this->db->where('status', 7);
    return $this->db->get()->num_rows();
  }
}
