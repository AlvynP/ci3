<?php

class Pasien extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Pasien_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = 'Data Pasien';
    $data['pasien'] = $this->Pasien_model->getAllPasien();
    if ($this->input->post('keyword')) {
      $data['pasien'] = $this->Pasien_model->cariDataPasien();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('pasien/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Data Pasien';

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('hp', 'No. HP', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pasien/tambah');
      $this->load->view('templates/footer');
    } else {
      // echo 'berhasil';
      $this->Pasien_model->tambahDataPasien();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('pasien');
    }
  }

  public function hapus($id)
  {
    $this->Pasien_model->hapusDataPasien($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('pasien');
  }

  public function detail($id)
  {
    $data['judul'] = 'Datail Data Pasien';
    $data['pasien'] = $this->Pasien_model->getPasienById($id);

    $this->load->view('templates/header', $data);
    $this->load->view('pasien/detail', $data);
    $this->load->view('templates/footer');
  }

  public function ubah($id)
  {
    $data['judul'] = 'Ubah Data Pasien';
    $data['pasien'] = $this->Pasien_model->getPasienById($id);
    $data['poli'] = ['ORTOPHEDI', 'PENYAKIT DALAM', 'OBGYN', 'SEPESIALIS PARU', 'SEPESIALIS JANTUNG', 'SEPESIALIS BEDAH', 'SEPESIALIS PENYAKIT UROLOGI', 'SEPESIALIS KULIT', 'SEPESIALIS SYARAF', 'SEPESIALIS ANAK', 'GIGI'];

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('hp', 'No. HP', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pasien/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      // echo 'berhasil';
      $this->Pasien_model->ubahDataPasien();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('pasien');
    }
  }
}
