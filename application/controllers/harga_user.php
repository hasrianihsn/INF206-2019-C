<?php
class harga_user extends CI_Controller
{
    public function harga(){
			$data['result']= $this->fishlist_model->harga('data');
      $data['main_view'] = 'harga';
      $this->load->view('layout/mainUser',$data);
    }
  }
 ?>
