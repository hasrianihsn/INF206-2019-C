<?php

class seafood_model extends CI_Model
{
  public function getGroupBy()
  {
    $this->db->select('nama_seafood,gambar_seafood,count(nama_seafood) as total');
    $this->db->group_by('nama_seafood');
    return $this->db->get('data_seafood')->result();
  }

  public function hapusData($gambarseafood)
  {
    $this->db->where('gambar_seafood', $gambarseafood);
    $this->db->delete('data_seafood');
  }
}
