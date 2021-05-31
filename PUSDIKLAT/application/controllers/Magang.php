<?php

/**
 * summary
 */
class Magang extends CI_Controller
{
	/**
	 * summary
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('magang_model');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/footer');
	}

	public function tambah_magang()
	{
		$this->load->view('templates/header');
		$this->load->view('user/form_magang');
		$this->load->view('templates/footer');
	}

	public function tambahDataMagang()
	{
		$nim = $this->input->post('nim', true);
		$nama = $this->input->post('nama', true);
		$instansi = $this->input->post('instansi', true);
		$prodi = $this->input->post('prodi', true);
		$semester = $this->input->post('semester', true);
		$no_telp = $this->input->post('no_telp', true);
		$email = $this->input->post('email', true);
		$unit = $this->input->post('unit', true);
		$ketentuan = $this->input->post('ketentuan', true);
		$no_surat = $this->input->post('no_surat', true);
		$surat_magang = $_FILES['surat_magang'];
		$khs = $_FILES['khs'];

		if ($surat_magang = '') {
		} else {
			$config['upload_path'] = './surat_magang';
			$config['allowed_types'] = 'pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('surat_magang')) {
				echo 'Unggah Berkas Gagal';
				die();
			} else {
				$surat_magang = $this->upload->data('file_name');
			}
		}
		if ($khs = '') {
		} else {
			$config2['upload_path'] = './khs';
			$config2['allowed_types'] = 'pdf';
			$this->upload->initialize($config2);
			$this->load->library('upload', $config2);
			if (!$this->upload->do_upload('khs')) {
				echo 'Unggah Berkas Gagal';
				die();
			} else {
				$khs = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'instansi' => $instansi,
			'prodi' => $prodi,
			'semester' => $semester,
			'no_telp' => $no_telp,
			'email' => $email,
			'unit' => $unit,
			'ketentuan' => $ketentuan,
			'no_surat' => $no_surat,
			'surat_magang' => $surat_magang,
			'khs' => $khs
		);
		$this->magang_model->tambahDataMagang($data);
		$this->session->set_flashdata('flashMessage', 'Pendaftaran Berhasil');
		redirect('home/unit');
	}
}
