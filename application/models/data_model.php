<?php

  class data_model extends CI_Model {
    public function getGroupBy(){
      $this->db->select('nama_ikan,gambar_ikan,count(nama_ikan) as total');
      $this->db->group_by('nama_ikan');
      return $this->db->get('data')->result();
    }

    public function hapusData($gambarIkan){
      $this->db->where('gambar_ikan',$gambarIkan);
      $this->db->delete('data');
    }
}
