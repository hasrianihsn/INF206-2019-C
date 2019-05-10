<?php
class register extends CI_Controller
{
    public function daftar(){
    $this->load->view('register_view');
    }

    public function insert(){
      $nama= $_POST['nama'];
      $email= $_POST['email'];
      $password= $_POST['password'];


    $this->fishlist_model->create_admin([
      'nama' => $nama,
      'email' => $email,
      'password' => $password
    ]);
    redirect('login');
  }
}
