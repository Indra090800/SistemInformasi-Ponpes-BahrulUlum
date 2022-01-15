<?php  

class Tambah_sejarah extends CI_Controller
{
	
	public function index()
	{
		$data['sejarah'] = $this->berita_model->get_data('tb_sejarah')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tambah_sejarah',$data);
		$this->load->view('templates_admin/footer');
	}

	public function form_tambah()
	{
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_tambah');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_sejarah_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->form_tambah();
		}else{
			$nama              = $this->input->post('nama');
			$keterangan        = $this->input->post('keterangan');
			$tanggal           = $this->input->post('tanggal'  );
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
				'nama'       => $nama,
				'keterangan' => $keterangan,
				'tanggal'    => $tanggal,  
				'Foto'       => $foto
			);

			$this->berita_model->insert_data($data,'tb_sejarah');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Ditambahkan!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tambah_sejarah');
		}
	}

	public function update_sejarah($id){
		$where = array('id' => $id);
		$data['sejarah'] = $this->db->query("SELECT * FROM tb_sejarah sh WHERE sh.id='$id'")->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_update',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_sejarah_aksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_sejarah();
		}else{
			$id                = $this->input->post('id');
			$nama              = $this->input->post('nama');
			$keterangan        = $this->input->post('keterangan');
			$tanggal           = $this->input->post('tanggal'  );
			$foto = $_FILES['Foto']['name'];
			if($foto){
				$config['upload_path']   = './assets/upload';
				$config['allowed_types'] = 'jpeg|jpg|png|tiff|gif';

				$this->load->library('upload', $config);
				
				if($this->upload->do_upload('Foto')){
					$foto = $this->upload->data('file_name');
					$this->db->set('Foto',$foto);
				}else{
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'nama'       => $nama,
				'keterangan' => $keterangan,
				'tanggal'    => $tanggal
			);

			$where = array('id' => $id);

			$this->berita_model->update_data('tb_sejarah', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Diupdate!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tambah_sejarah');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama','Nama Berita','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
	}

	public function hapus_sejarah($id){
		$where = array('id' => $id);

		$this->berita_model->hapus_data($where,'tb_sejarah');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/tambah_sejarah');
	}

	public function detail($id){
		$data['detail'] = $this->berita_model->ambil_id_sejarah($id);
		$data['sejarah'] = $this->berita_model->get_data('tb_sejarah')->result();

		$this->load->view('user/detail',$data);
		$this->load->view('templates_user/header');
	}

}

?>