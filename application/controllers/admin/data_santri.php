<?php 

class Data_santri extends CI_Controller
{
	
	public function index()
	{
		$data['santri'] = $this->santri_model->get_data('tb_santri')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/data_santri',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_santri()
	{	
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tambah_santri');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_santri_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_santri();
		}else{
			$nama               = $this->input->post('nama');
			$alamat             = $this->input->post('alamat');
			$ttl                = $this->input->post('ttl');
			$pendidikan         = $this->input->post('pendidikan');
			$asal_sekolah       = $this->input->post('asal_sekolah');
			$no_telp            = $this->input->post('no_telp');
			$namaortu           = $this->input->post('nama_ortu');
			$no_hp              = $this->input->post('no_hp');
			

			$data = array(
				'nama'             => $nama,
				'alamat'           => $alamat,
				'ttl'              => $ttl,
				'pendidikan'       => $pendidikan,
				'asal_sekolah'     => $asal_sekolah,
				'no_telp'          => $no_telp,
				'nama_ortu'        => $namaortu,
				'no_hp'            => $no_hp
			);

			$this->santri_model->insert_data($data,'tb_santri');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Ditambahkan!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_santri');
		}
	}

	public function update_santri($id){
		$where = array('id' => $id);
		$data['santri'] = $this->db->query("SELECT * FROM tb_santri sr WHERE sr.id='$id'")->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/update_santri',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_santri_aksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_santri();
		}else{
			$id               = $this->input->post('id');
			$nama               = $this->input->post('nama');
			$alamat             = $this->input->post('alamat');
			$ttl                = $this->input->post('ttl');
			$pendidikan         = $this->input->post('pendidikan');
			$asal_sekolah       = $this->input->post('asal_sekolah');
			$no_telp            = $this->input->post('no_telp');
			$namaortu           = $this->input->post('nama_ortu');
			$no_hp              = $this->input->post('no_hp');
			

			$data = array(
				'nama'             => $nama,
				'alamat'           => $alamat,
				'ttl'              => $ttl,
				'pendidikan'       => $pendidikan,
				'asal_sekolah'     => $asal_sekolah,
				'no_telp'          => $no_telp,
				'nama_ortu'        => $namaortu,
				'no_hp'            => $no_hp
			);

			$where = array('id' => $id);

			$this->santri_model->update_data('tb_santri', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Diupdate!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_santri');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama','Nama Santri','required');
		$this->form_validation->set_rules('alamat','Alamat Santri','required');
		$this->form_validation->set_rules('ttl','Tempat, Tanggal Lahir Santri','required');
		$this->form_validation->set_rules('asal_sekolah','Asal Sekolah Santri','required');
		$this->form_validation->set_rules('no_telp','No Telp Santri','required');
		$this->form_validation->set_rules('nama_ortu','Nama Orang Tua Santri','required');
		$this->form_validation->set_rules('no_hp','No HP Santri','required');
	}

	public function detail($id){
		$data['detail'] = $this->santri_model->ambil_id_berita($id);

		$this->load->view('user/detail',$data);
		
	}

	public function hapus_santri($id){
		$where = array('id' => $id);

		$this->santri_model->hapus_data($where,'tb_santri');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/data_santri');
	}
}

?>