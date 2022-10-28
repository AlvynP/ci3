<?php 
/**
 * undocumented class
 */
class Home extends Ci_Controller {


  public function __construct() {
    parent::__construct();
  }


 public function Index($nama = '') {
  // echo 'home / index';
  $data['judul'] = 'Halaman Home';
  $data['nama'] = $nama;
  $this->load->view('templates/header', $data);
  $this->load->view('home/index', $data);
  $this->load->view('templates/footer');
 } 
}


?>