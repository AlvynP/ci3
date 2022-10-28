<?php

class All extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('All_model');
    $this->load->library('pagination');
  }

  public function index()
  {
    $data['judul'] = 'List of All';


    // load library
    // $this->load->library('pagination');

    // ambil data keyword
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      // ''
      $data['keyword'] = $this->session->userdata('keyword');
    }




    // config di pindahkan ke folder config/pagination.php 

    // $config['base_url'] = 'http://localhost/ci3/all/index';

    // $config['total_rows'] = $this->All_model->countAllAlls();
    $this->db->like('name', $data['keyword']);
    $this->db->or_like('email', $data['keyword']);
    $this->db->from('all');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 8;

    // var_dump($config['total_rows']);
    // die;

    //style di pindahkan
    // $config['full_tag_open'] = '<nav><ul class="pagination">';
    // $config['full_tag_close'] = '</ul></nav>';

    // $config['first_link'] = 'First';
    // $config['first_tag_open'] = '<li class="page-item">';
    // $config['first_tag_close'] = '</li>';

    // $config['last_link'] = 'Last';
    // $config['last_tag_open'] = '<li class="page-item">';
    // $config['last_tag_close'] = '</li>';

    // $config['next_link'] = '&raquo';
    // $config['next_tag_open'] = '<li class="page-item">';
    // $config['next_tag_close'] = '</li>';

    // $config['prev_link'] = '&laquo';
    // $config['prev_tag_open'] = '<li class="page-item">';
    // $config['prev_tag_close'] = '</li>';

    // $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    // $config['cur_tag_close'] = '</a></li>';

    // $config['num_tag_open'] = '<li class="page-item">';
    // $config['num_tag_close'] = '</li>';

    // $config['attributes'] = array('class' => 'page-link');


    // initialize
    $this->pagination->initialize($config);


    // $this->load->model('Alls_model', 'alls');

    $data['start'] = $this->uri->segment('3');
    $data['all'] = $this->All_model->getAlls($config['per_page'], $data['start'], $data['keyword']);

    // $data['pasien'] = $this->Pasien_model->getAllPasien();

    // if ($this->input->post('keyword')) {
    //   $data['pasien'] = $this->Pasien_model->cariDataPasien();
    // }
    $this->load->view('templates/header', $data);
    $this->load->view('alls/index', $data);
    $this->load->view('templates/footer');
  }
}
