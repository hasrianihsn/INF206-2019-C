<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('User/Userhome');
    }

    public function Userlogin()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // $data['title'] = 'User Login';
            $this->load->view('User/Userheader');
            $this->load->view('User/Userlogin');
            $this->load->view('User/Userfooter');
        } else {
            //ketika validasi success
            $this->_login(); //method private supaya bisa menjalankan login
        }
    }

    private function _login()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['name' => $name])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user aktif
            if (password_verify($password, $user['password'])) {
                $data = [
                    'name' => $user['name'],
                    'id' => $user['id']
                ];
                $this->session->set_userdata($data);
                redirect('Auth/Ikan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
                redirect('Auth/Userlogin');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">User Name is not registered! </div>'
            );
            redirect('Auth/Userlogin');
        }
    }


    public function UsersignUp()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This email has already registered!', 'required' => 'The Email field must contain a valid email address.']
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            ['matches' => 'password dont mattch!']
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            // $data['title'] = 'User Registration';
            $this->load->view('User/Userheader');
            $this->load->view('User/UsersignUp');
            $this->load->view('User/Userfooter');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login!
        </div>');
            redirect('Auth/Userlogin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        You have been logged out!
    </div>');
        redirect('Auth');
    }
    //tampilan ikan by Zakiatus Safara & Hasriani
    public function Tampilan()
    {
        $this->load->view('User/TampilanHeader');
        $this->load->view('User/Tampilan');
        $this->load->view('User/TampilanFooter');
    }

    public function Ikan()
    {
        $this->load->view('User/TampilanHeader');
        $this->db->order_by('nama_ikan', 'asc');
        // $data['emailikan'] = $this->db->where('email_id', $this->session->userdata('email'))->get('data')->result_array();
        $data['ikan'] = $this->db->get('data')->result();
        $data['total'] = $this->data_model->getGroupBy();
        $this->load->view('User/dftrikanUser_view', $data);
        $this->load->view('User/TampilanFooter');
    }

    //tampilan Seafood by Zakiatus Safara & Hasriani

    public function Seafood()
    {
        $this->load->view('User/TampilanHeader');
        $this->db->order_by('nama_seafood', 'asc');
        // $data['emailseafood'] = $this->db->where('email_id', $this->session->userdata('email'))->get('data')->result_array();
        $data['seafood'] = $this->db->get('data_seafood')->result();
        $data['total'] = $this->seafood_model->getGroupBy();
        $data['main_view'] = 'dftrseafoodUser_view';
        // $this->load->view('layout/mainUser', $data);
        $this->load->view('User/dftrseafoodUser_view', $data);
        $this->load->view('User/TampilanFooter');
    }

    public function About()
    {
        $this->load->view('User/TampilanHeader');
        $this->load->view('User/About');
        $this->load->view('User/TampilanFooter');
    }

    public function Team()
    {
        $this->load->view('User/TampilanHeader');
        $this->load->view('User/team');
        $this->load->view('User/TampilanFooter');
    }


}
