<?php 


class Dashboard extends CI_Controller
{
	
	public function index() 
	{
		$data['berita']  = $this->berita_model->get_data('tb_berita')->result();
		$data['sejarah'] = $this->berita_model->get_data('tb_sejarah')->result();
		$data['tentang'] = $this->berita_model->get_data('about')->result();
		$data['hubungi'] = $this->berita_model->get_data('pesan')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();
		
		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar',$data);
		$this->load->view('user/dashboard');
		$this->load->view('templates_user/footer');
	}

	public function kirim_pesan()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$nama              = $this->input->post('nama');
			$email             = $this->input->post('email');
			$no_telp           = $this->input->post('no_telp');
			$pesan             = $this->input->post('pesan');

			$data = array(
				'nama'       => $nama,
				'email'      => $email,
				'no_telp'    => $no_telp,
				'pesan'      => $pesan
			);

			$this->hubungi_model->insert_data($data,'pesan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Berhasil Dikirim!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('dashboard');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama','Nama ','required',['required' => 'Nama Wajib Diisi']);
		$this->form_validation->set_rules('email','Email','required',['required' => 'Email Wajib Diisi']);
		$this->form_validation->set_rules('no_telp','No Telp','required',['required' => 'No Telp Wajib Diisi']);
	}
}

 ?>