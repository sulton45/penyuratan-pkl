<?php

/**
 * summary
 */
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->model('Admin_model');
		$data['mahasiswa'] = $this->Admin_model->getAllmahasiswa();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($nim)
	{
		$data['mahasiswa'] = $this->Admin_model->getMahasiswaById($nim);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('admin/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahStatus()
	{
		$this->Admin_model->editStatus();
		redirect('admin/index');
	}

	function download($id)
	{
		$this->load->helper('download');
		$data = $this->Admin_model->getMahasiswaById($id);
		force_download('surat_magang/' . $data['surat_magang'], NULL);
		redirect('admin/index');
	}
}
