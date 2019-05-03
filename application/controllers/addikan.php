<?php
class addikan extends CI_Controller
{
    public function ikan(){
      $data['main_view'] = 'addikan_view';
      $this->load->view('layout/main',$data);
      }
        public function simpan_addikan(){
        $this->load->library('upload');
        $config['upload_path'] = '.img/files/';
        $config['allowed_types'] = 'jpg|img';
        $config['overwrite'] = 'FALSE';
        $config['max_size']= '5000';
        $this->load->library('upload'.$config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('gambar_ikan')){
          $this->session->set_flashdata('Gagal');
            redirect('addikan');
        }else{
            $media = $this->upload->data();
            $inputFileName = base_url().'img/files'.$media['file_name'];

          $data = array(
            'nama_ikan' => $this->input->post('nama_ikan'),
            'nama_pasar' => $this->input->post('nama_pasar'),
            'harga' => $this->input->post('harga'),
            'gambar_ikan' => $media['file_name'],
          );
          $res = $this->fishlist_model->do_simpan($data);
            if ($res=0){
              redirect('addikan/sukses_add');
            }else{
              echo 'Penyimpanan gagal';
            }
        }
      }
  }
 ?>
