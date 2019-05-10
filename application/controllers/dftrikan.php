<?php
class dftrikan extends CI_Controller
{
    public function daftarikan(){
      $data['main_view'] = 'dftrikan_view';
      $this->load->view('layout/main',$data);
    }
  }
 ?>
