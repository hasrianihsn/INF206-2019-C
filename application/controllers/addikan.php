<?php
class addikan extends CI_Controller
{
  public function __construct()
  {
    Parent::__construct();
    $this->load->library('upload');
  }

  public function index()
  {
    $data['main_view'] = 'Admin/addikan_view';
    $this->load->view('Admin/layout/main', $data);
  }

  public function tambah_aksi()
  {
    $namaIkan = $this->input->post('namaIkan');
    $config['upload_path'] = './img';
    $config['allowed_types'] = 'jpg|png';
    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('image')) {
      $error = array('error' => $this->upload->display_errors());
      $data['main_view'] = 'Admin/addikan_view';
      $this->load->view('Admin/layout/main', $data, $error);
    } else {
      $image = $this->upload->data();
      $data['nama_ikan'] = $namaIkan;
      // $data['email_id'] = $this->session->userdata('email');
      $data['gambar_ikan'] = $image['file_name'];
      for ($i = 0; $i < count($_POST['hargaIkan']); $i++) {
        $data['nama_pasar'] = $_POST['namaPasar'][$i];
        $data['harga'] = $_POST['hargaIkan'][$i];
        $this->db->insert('data', $data);
      }
      redirect('dftrikan/daftarikan');
    }
  }

  public function tambah_pasar()
  {
    $data['nama_ikan'] = $this->input->post('namaIkan');
    $data['gambar_ikan'] = $this->input->post('gambar_ikan');
    for ($i = 0; $i < count($_POST['hargaIkan']); $i++) {
      $data['nama_pasar'] = $_POST['namaPasar'][$i];
      $data['harga'] = $_POST['hargaIkan'][$i];
      $this->db->insert('data', $data);
    }
    redirect(base_url('dftrikan/daftarikan'));
  }
}
