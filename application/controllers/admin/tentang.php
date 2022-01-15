<?php 

class Tentang extends CI_Controller
{
	public function index()
	{
		$data['tentang'] = $this->berita_model->get_data('about')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tentang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function form_tambah_tentang()
	{
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_tambah_tentang');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_tentang_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->form_tambah_tentang();
		}else{
			$keterangan        = $this->input->post('keterangan');
			$foto = $_FILES['Foto']['name'];
			if($foto=''){}else{
				$config['upload_path']   = './assets/upload';
				$config['allowed_types'] = 'jpeg|jpg|png|tiff|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('Foto')){
					echo "Gambar Gagal DiUpload!";die();
				}else{
					$foto=$this->upload->data('file_name');
				}
			}

			$data = array(
				'keterangan' => $keterangan,
				'Foto'       => $foto
			);

			$this->berita_model->insert_data($data,'about');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Ditambahkan!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tentang');
		}
	}

	
	public function _rules(){
		$this->form_validation->set_rules('keterangan','Keterangan','required');
	}

	public function hapus_tentang($id){
		$where = array('id' => $id);

		$this->berita_model->hapus_data($where,'about');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/tentang');
	}
}
?>