<?php
class seafood_user extends CI_Controller
{
    public function seafood_u(){
			$data['result']= $this->fishlist_model->getdata('data_seafood');
      $data['main_view'] = 'seafood';
      $this->load->view('layout/mainUser',$data);
    }
  }
 ?>
