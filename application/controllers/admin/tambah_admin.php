<?php 

class Tambah_admin extends CI_Controller
{
	
	public function index()
	{
		$data['admin'] = $this->admin_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/tambah_admin',$data);
		$this->load->view('templates_admin/footer');
	}

	public function form_tambah_admin()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('admin/form_tambah_admin');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_admin_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->form_tambah_admin();
		}else{
			$nama              = $this->input->post('nama');
			$username          = $this->input->post('username');
			$password          = md5($this->input->post('password'));
			$role_id           = $this->input->post('role_id');   

			$data = array(
				'nama'       => $nama,
				'username'   => $username,
				'password'   => $password,
				'role_id'    => $role_id
			);

			$this->admin_model->insert_data($data,'tb_admin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Ditambahkan!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/tambah_admin');
		}
	}

	public function hapus($id){
		$where = array('id' => $id);

		$this->admin_model->hapus_data($where,'tb_admin');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/tambah_admin');
	}

	public function update($id){
		$where = array('id' => $id);
		$data['admin'] = $this->db->query("SELECT * FROM tb_admin br WHERE br.id='$id'")->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_update_berita',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_admin_aksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_berita();
		}else{
			$id                = $this->input->post('id');
			$nama              = $this->input->post('nama');
			$username          = $this->input->post('username');
			$password          = $this->input->post('password');
			$role_id           = $this->input->post('role_id');
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
				'username'   => $username,
				'password'   => $password,
				'role_id'    => $role_id,
			);

			$where = array('id' => $id);

			$this->berita_model->update_data('tb_berita', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Diupdate!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama','Nama','required',['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('password','Password','required|matches[password2]',[
			'required' => 'Password Wajib Diisi!',
			'matches'  => 'Password Tidak Cocok']);
		$this->form_validation->set_rules('password2','Password','required|matches[password]',[
			'required' => 'Password Wajib Diisi!',
			'matches'  => 'Password Tidak Cocok']);
	}
}

?>