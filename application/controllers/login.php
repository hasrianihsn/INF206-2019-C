<?php
class login extends CI_Controller
{
    public function index(){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Email', 'required|trim');
      $this->form_validation->set_rules('password', 'Password', 'required|trim');

      if ($this->form_validation->run()== FALSE) {
        $this->load->view('login_view');

      }
      else {
        $this->aksi_login();
      }
    }

    public function logout(){
      $this->session->unset_userdata('email');

      redirect('login');
    }

    public function aksi_login(){
  	$email = $this->input->post('email');
  	$password = $this->input->post('password');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $user = $this->db->get_where('admin', ['email' => $email])->row_array();

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
