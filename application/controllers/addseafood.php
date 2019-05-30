<?php
class addseafood extends CI_Controller
{
  public function seafood()
  {
    $data['main_view'] = 'Admin/addseafood_view';
    $this->load->view('Admin/layout/main', $data);
  }


  public function index()
  {
    $data['main_view'] = 'Admin/addseafood_view';
    $this->load->view('Admin/layout/main', $data);
  }

  public function tambah_aksi()
  {
    $namaSeafood = $this->input->post('namaSeafood');
    $config['upload_path'] = './img';
    $config['allowed_types'] = 'jpg|png';
    $config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('image')) {
      $error = array('error' => $this->upload->display_errors());
      $data['main_view'] = 'Admin/addseafood_view';
      $this->load->view('Admin/layout/main', $data, $error);
    } else {
      $image = $this->upload->data();
      $data['nama_seafood'] = $namaSeafood;
      $data['gambar_seafood'] = $image['file_name'];
      for ($i = 0; $i < count($_POST['hargaSeafood']); $i++) {
        $data['nama_pasar'] = $_POST['namaPasar'][$i];
        $data['harga'] = $_POST['hargaSeafood'][$i];
        $this->db->insert('data_seafood', $data);
      }
      redirect('dftrseafood/daftarseafood');
    }
  }
  public function tambah_pasar()
  {
    $data['nama_seafood'] = $this->input->post('namaseafood');
    $data['gambar_seafood'] = $this->input->post('gambar_seafood');
    for ($i = 0; $i < count($_POST['hargaseafood']); $i++) {
      $data['nama_pasar'] = $_POST['namaPasar'][$i];
      $data['harga'] = $_POST['hargaseafood'][$i];
      $this->db->insert('data_seafood', $data);
    }
    redirect(base_url('dftrseafood/daftarseafood'));
  }
}
