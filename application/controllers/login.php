<?php
class login extends CI_Controller
{
    public function masuk(){
      $this->load->library('form_validation');
      $this->load->view('login_view');
      echo "tes";
    }
    public function aksi_login(){

    $this->load->library('form_validation');

  	$email = $this->input->post('email');
  	$password = $this->input->post('password');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $user = $this->db->get_where('admin', ['email' => $email])->row_array();

    if ($this->form_validation->run() == false) {
      $this->load->view('login_view');
    }
      else {
        if ($user) {
          if ($user['id'] >= 0) {
            if (password_verify($password, $user['password'])) {
              // redirect('addikan/ikan');
              echo "berhasil";
            }
            else {
              echo "password yang dimasukkan salah!";
              // redirect('login/masuk');
            }
          }
        }
        else {
          redirect('login/masuk');
        }
      }
    }
  }
 ?>
