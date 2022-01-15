<?php 

class Dashboard extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 Maaf, Permintaan Anda Ditolak!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('dashboard');
		}
	}

	public function index()
	{
		$data['santri'] = $this->santri_model->get_data('tb_santri')->num_rows();
		$data['berita'] = $this->santri_model->get_data('tb_berita')->num_rows();
		$data['about']  = $this->santri_model->get_data('about')->num_rows();
		$data['hubungi'] = $this->berita_model->get_data('pesan')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->num_rows();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>