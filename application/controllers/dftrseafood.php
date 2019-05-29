<?php
class dftrseafood extends CI_Controller
{
  public function daftarseafood()
  {
    $this->db->order_by('nama_seafood', 'asc');
    // $data['emailseafood'] = $this->db->where('email_id', $this->session->userdata('email'))->get('data')->result_array();
    $data['seafood'] = $this->db->get('data_seafood')->result();
    $data['total'] = $this->seafood_model->getGroupBy();
    $data['main_view'] = 'Admin/dftrseafood_view';
    $this->load->view('Admin/layout/main', $data);
  }

  public function editHarga($id)
  {
    $this->db->where('id_seafood', $id);
    $harga = $this->input->post('harga');
    $this->db->update('data_seafood', [
      'harga' => $harga
    ]);
    redirect(base_url('dftrseafood/daftarseafood'));
  }

  public function hapus($gambarseafood)
  {
    $this->seafood_model->hapusData($gambarseafood);
    redirect('dftrseafood/daftarseafood');
  }
}
