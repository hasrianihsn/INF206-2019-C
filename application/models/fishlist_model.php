<?php
  /**
   *
   */
  class fishlist_model extends CI_model
  {
    public function create_admin($data){
      $this->db->insert('admin',$data);
		}
	public function getData(){
      $query = $this->db->get('data');
      return $query->result();
    }
    public function getDatas(){
      $query = $this->db->get('data_seafood');
      return $query->result();
    }
  //   class fishlist_model extends CI_Model{
	//        function cek_login($data,$where){
	// 	         return $this->db->get_where($data,$where);
	// }
}
  //     public function simpan_addikan($data){
  //       $this->db->insert('data',$data);
  //     }
  // }


 ?>
