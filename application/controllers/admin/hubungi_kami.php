<?php 

class Hubungi_kami extends CI_Controller
{
	public function index(){
		$data['hubungi'] = $this->hubungi_model->tampil_data('pesan')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/hubungi_kami',$data);
		$this->load->view('templates_admin/footer');
	}

	public function kirim_email($id){
		$where = array('id' => $id);
		$data['hubungi'] = $this->hubungi_model->kirim_data($where, 'pesan')->result();
		$data['admin'] = $this->berita_model->get_data('tb_admin')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('admin/form_kirim_email',$data);
		$this->load->view('templates_admin/footer');
	}

	public function kirim_email_aksi(){
		$to_email     = $this->input->post('email');
		$subject      = $this->input->post('subject');
		$message      = $this->input->post('pesan');

		$config = [
			'mailtype'    => 'html',
			'charset'     => 'utf-8',
			'protocol'    => 'smtp',
			'smtp_host'   => 'ssl://smtp.gmail.com',
			'smtp_user'   => 'indramaulana.9c@gmail.com',
			'smtp_pass'   => 'Gelatikk123',
			'smtp_port'   => 465,
			'crlf'        => "\r\n",
			'newline'     => "\r\n"
		];	

		$this->load->library('email', $config);

		$this->email->from("Yayasan AL-QOMAR CIPANGSOR");

		$this->email->to($to_email);

		$this->email->subject($subject);

		$this->email->message($message);

		if($this->email->send())
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				Pesan Berhasil Dikirim Ke User!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/hubungi_kami');
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Pesan Tidak Terkirim!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/hubungi_kami');
		}
	}

	public function hapus($id){
		$where = array('id' => $id);

		$this->hubungi_model->hapus_data($where,'pesan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Dihapus!.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('admin/hubungi_kami');
	}
}

 ?>