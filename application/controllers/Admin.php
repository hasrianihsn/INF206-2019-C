<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/headerAdmin');
            $this->load->view('Admin/login');
            $this->load->view('Admin/footerAdmin');
        } else {
            //ketika validasi success
            $this->_login(); //method private supaya bisa menjalankan login
        }
    }


    private function _login()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['name' => $name])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user aktif
            if (password_verify($password, $user['password'])) {
                $data = [
                    'name' => $user['name'],
                    'id' => $user['id']
                ];
                $this->session->set_userdata($data);
                redirect('dftrikan/daftarikan');

            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert"> Wrong password! </div>'
                );
                redirect('Admin');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">User name is not registered! </div>'
            );
            redirect('Admin');
        }
    }


    public function signUp()
    {
        $this->form_validation->set_rules('name', 'name', 'required|trim');

        $this->form_validation->set_rules(
            'email',
            'email',
            'required|trim|valid_email|is_unique[admin.email]',
            ['is_unique' => 'This email has already registered!', 'required' => 'The Email field must contain a valid email address.']
        );

        $this->form_validation->set_rules(
            'password1',
            'password',
            'required|trim|min_length[3]|matches[password2]',
            ['matches' => 'password dont mattch!']
        );

        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('Admin/headerAdmin');
            $this->load->view('Admin/signUp');
            $this->load->view('Admin/footerAdmin');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'is_active' => 1
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login!
        </div>');
            redirect('Admin');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('name');

        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        You have been logged out!
    </div>');
        redirect('Admin');
    }
}
