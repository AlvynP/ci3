<?php
class Pasien_model extends CI_model
{
  public function getAllPasien()
  {
    // echo 'ok';
    // $query = $this->db->get('pasien');
    // return $query->result_array();
    return $this->db->get('pasien')->result_array();
  }

  public function tambahDataPasien()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "hp" => $this->input->post('hp', true),
      "email" => $this->input->post('email', true),
      "poli" => $this->input->post('poli', true)
    ];

    $this->db->insert('pasien', $data);
  }

  public function hapusDataPasien($id)
  {
    // $this->db->where('id', $id);
    // $this->db->delete('pasien');

    $this->db->delete('pasien', ['id' => $id]);
  }

  public function getPasienById($id)
  {
    return $this->db->get_where('pasien', ['id' => $id])->row_array();
  }

  public function ubahDataPasien()
  {
    $data = [
      "nama" => $this->input->post('nama', true),
      "hp" => $this->input->post('hp', true),
      "email" => $this->input->post('email', true),
      "poli" => $this->input->post('poli', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pasien', $data);
  }

  public function cariDataPasien()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('hp', $keyword);
    $this->db->or_like('email', $keyword);
    $this->db->or_like('poli', $keyword);
    return $this->db->get('pasien')->result_array();
  }
}
