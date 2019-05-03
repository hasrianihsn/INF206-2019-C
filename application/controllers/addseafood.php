<?php
class addseafood extends CI_Controller
{
    public function seafood(){
      $data['main_view'] = 'addseafood_view';
      $this->load->view('layout/main',$data);
    }
  }
 ?>
