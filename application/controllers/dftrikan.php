<?php
class dftrikan extends CI_Controller
{
    public function daftarikan()
  {
    $this->db->order_by('nama_ikan', 'asc');
    $data['ikan'] = $this->db->get('data')->result();
    $data['total'] = $this->data_model->getGroupBy();
    $data['main_view'] = 'Admin/dftrikan_view';
    $this->load->view('Admin/layout/main', $data);
	}
	
	public function hapus($gambarIkan)
  {
    $this->data_model->hapusData($gambarIkan);
    redirect('dftrikan/daftarikan');
  }
  }
 ?>
