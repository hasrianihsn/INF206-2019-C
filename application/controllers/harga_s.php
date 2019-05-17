<?php
class harga_s extends CI_Controller
{
    public function price(){
			$data['result']= $this->fishlist_model->hargas('data_seafood');
      $data['main_view'] = 'harga_seafood';
      $this->load->view('layout/mainUser',$data);
    }
  }
 ?>
