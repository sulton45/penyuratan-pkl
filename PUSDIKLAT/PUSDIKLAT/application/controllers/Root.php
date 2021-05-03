<?php

/**
 * summary
 */
class Root extends CI_Controller
{
	/**
	 * summary
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Root_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->model('Root_model');
		$data['mahasiswa'] = $this->Root_model->getAllmahasiswa();
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Root_model->searchMahasiswa();
		}
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/index', $data);
		$this->load->view('templates/footer');
	}

	public function penelitian()
	{
		$this->load->model('Root_model');
		$data['penelitian'] = $this->Root_model->getAllpenlit();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/penelitian', $data);
		$this->load->view('templates/footer');
	}


	public function detil($nim)
	{
		$data['mahasiswa'] = $this->Root_model->getMahasiswaById($nim);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/detil', $data);
		$this->load->view('templates/footer');
	}

	public function detilPenelitian($id_penelitian)
	{
		$data['penelitian'] = $this->Root_model->getPenlitById($id_penelitian);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/detil_penlit', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($nim)
	{
		$data['mahasiswa'] = $this->Root_model->getMahasiswaById($nim);
		$data['unit'] = ['Biro Perencanaan dan Keuangan', 'Biro Hukum, Organisasi, Kerja Sama dan Hubungan Masyarakat', 'Biro SDM dan Umum', 'Direktorat Deposit dan Pengembangan Koleksi Perpustakaan', 'Pusat Bibliografi dan Pengolahan Bahan Perpustakaan', 'Pusat Preservasi dan Alih Media Bahan Perpustakaan', 'Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara', 'Direktorat Standarisasi dan Akreditasi', 'Pusat Pengembangan Perpustakaan Umum dan Khusus', 'Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi', 'Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca', 'Pusat Data dan Informasi', 'Pusat Pembinaan Pustakawan', 'Pusat Pendidikan dan Pelatihan', 'Inspektorat', 'Dan lain'];
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/ubah', $data);
		$this->load->view('templates/footer');
	}

	public function ubahData()
	{
		$this->session->set_flashdata('flashMessage', 'Berhasil Diubah');
		$this->Root_model->editDataMahasiswa();
		redirect('root/index');
	}

	public function hapus($id, $magang, $khs)
	{
		$path = './surat_magang/';
		$pathKHS = './khs/';
		@unlink($path . $magang);
		@unlink($pathKHS . $khs);
		$this->session->set_flashdata('flashMessage', 'Berhasil Dihapus');
		$this->Root_model->hapusData($id);
		redirect('root/index');
	}

	function getSuratMagang($id)
	{
		$this->load->helper('download');
		$data = $this->Root_model->getMahasiswaById($id);
		force_download('surat_magang/' . $data['surat_magang'], NULL);
		redirect('admin/index');
	}

	function getKhs($id)
	{
		$this->load->helper('download');
		$data = $this->Root_model->getMahasiswaById($id);
		force_download('khs/' . $data['khs'], NULL);
		redirect('admin/index');
	}

	function getSuratPenelitian($id)
	{
		$this->load->helper('download');
		$data = $this->Root_model->getPenlitById($id);
		force_download('surat_penelitian/' . $data['surat_penelitian'], NULL);
		redirect('root/penelitian');
	}

	function getKhsPenelitian($id)
	{
		$this->load->helper('download');
		$data = $this->Root_model->getPenlitById($id);
		force_download('khs/' . $data['khs'], NULL);
		redirect('root/penelitian');
	}
}
