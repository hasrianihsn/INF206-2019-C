<?php
class login extends CI_Controller
{
    public function index(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Email', 'required|trim'); //email harus diisi
      $this->form_validation->set_rules('password', 'Password', 'required|trim'); //password juga harus diisi

      if ($this->form_validation->run()== FALSE) {
        $this->load->view('login_view');

      }
      else {
        $this->aksi_login();
      }
    }

//membuat fungsi logout
    public function logout(){
      $this->session->unset_userdata('email');

      redirect('login');
    }
//membuat fungsi agar admin bisa menginput email sama password
    public function aksi_login(){
  	$email = $this->input->post('email');
  	$password = $this->input->post('password');

//mengambil email dari database
    $this->form_validation->set_rules('email', 'Email', 'required');
    $user = $this->db->get_where('admin', ['email' => $email])->row_array();

//mengecek password yg dimasukkan sesuai atau tidak dengan database
      if ($user) {
        if ($password == $user['password']) {
            $data = [
              'email' => $user['email'],
            ];
            $this->session->set_userdata($data);
            redirect('addikan/ikan');
          }
        }else{
          redirect('login');
        }
      }
}
