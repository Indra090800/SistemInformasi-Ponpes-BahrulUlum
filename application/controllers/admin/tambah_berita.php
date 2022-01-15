<?php 

class Tambah_berita extends CI_Controller
{
	
	public function index()
	{
		$data['berita'] = $this->berita_model->get_data('tb_berita')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tambah_berita',$data);
		$this->load->view('templates_admin/footer');
	}

	public function form_tambah_berita()
	{
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_tambah_berita');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_berita_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->form_tambah_berita();
		}else{
			$nama              = $this->input->post('nama');
			$keterangan        = $this->input->post('keterangan');
			$deskripsi         = $this->input->post('deskripsi');
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
				'deskripsi'  => $deskripsi,
				'Foto'       => $foto
			);

			$this->berita_model->insert_data($data,'tb_berita');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Ditambahkan!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tambah_berita');
		}
	}

	public function update_berita($id){
		$where = array('id' => $id);
		$data['berita'] = $this->db->query("SELECT * FROM tb_berita br WHERE br.id='$id'")->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_update_berita',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_berita_aksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_berita();
		}else{
			$id                = $this->input->post('id');
			$nama              = $this->input->post('nama');
			$keterangan        = $this->input->post('keterangan');
			$deskripsi         = $this->input->post('deskripsi');
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
				'deskripsi'  => $deskripsi
			);

			$where = array('id' => $id);

			$this->berita_model->update_data('tb_berita', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Diupdate!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tambah_berita');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama','Nama Berita','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
	}

	public function detail_berita($id){
		$data['detail'] = $this->berita_model->ambil_id_berita($id);

		$this->load->view('user/detail_berita',$data);
		$this->load->view('templates_user/header',$data);
		
	}

	public function hapus_berita($id){
		$where = array('id' => $id);

		$this->berita_model->hapus_data($where,'tb_berita');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/tambah_berita');
	}
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 ?>