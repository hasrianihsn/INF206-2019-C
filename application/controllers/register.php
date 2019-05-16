<?php
class register extends CI_Controller
{
  public function daftar(){
    $this->load->view('register_view');
  }

  public function insert()
  {
    $this->form_validation->set_rules('nama', 'nama', 'required|trim');
    $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[admin.email]');
    $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Register';
      $data['view'] = 'register_view';
      $this->load->view('register_view');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post('email')),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      ];

      $this->db->insert('admin', $data);
      $this->session->set_flashdata('message', '
      <div class="alert alert-success" role="alert">
      data berhasil ditambahkan
      </div>
      ');
      redirect('login');
    }
  }

}
