<?php
class ikan_user extends CI_Controller
{
    public function ikan_u(){
      $data['main_view'] = 'ikan';
      $this->load->view('layout/mainUser',$data);
    }
  }
 ?>
