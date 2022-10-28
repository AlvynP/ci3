<?php

use LDAP\Result;

class All_model extends CI_Model
{
  public function getAllAlls()
  {
    return $this->db->get('all')->result_array();
  }

  public function getAlls($limit, $start, $keyword = '')
  {
    if ($keyword) {
      $this->db->like('name', $keyword);
      $this->db->or_like('email', $keyword);
    }
    return $this->db->get('all', $limit, $start)->Result_array();
  }

  public function countAllAlls()
  {
    return $this->db->get('all')->num_rows();
  }
}
