<?php 


class Dashboard extends CI_Controller
{
	
	public function index($id) 
	{
		$data['berita'] = $this->berita_model->get_data('tb_berita')->result();
		$data1['detail'] = $this->berita_model->ambil_id_berita($id);

		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar',$data);
		$this->load->view('user/dashboard',$data1);
		$this->load->view('templates_user/footer');
	}
}

 ?>