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
		$this->load->helper(['url_helper', 'form']);
		$this->load->library(['form_validation', 'session', 'pdf']);
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

	public function buatSurat($nim)
	{
		$data['mahasiswa'] = $this->Root_model->getMahasiswaById($nim);
		$data['unit'] = ['Biro Perencanaan dan Keuangan', 'Biro Hukum, Organisasi, Kerja Sama dan Hubungan Masyarakat', 'Biro SDM dan Umum', 'Direktorat Deposit dan Pengembangan Koleksi Perpustakaan', 'Pusat Bibliografi dan Pengolahan Bahan Perpustakaan', 'Pusat Preservasi dan Alih Media Bahan Perpustakaan', 'Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara', 'Direktorat Standarisasi dan Akreditasi', 'Pusat Pengembangan Perpustakaan Umum dan Khusus', 'Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi', 'Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca', 'Pusat Data dan Informasi', 'Pusat Pembinaan Pustakawan', 'Pusat Pendidikan dan Pelatihan', 'Inspektorat', 'Dan lain'];
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('root/buatSurat', $data);
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

	public function pdf($nim)
	{


		// create new PDF document
		$pdf = new MYPDF('p', 'mm', 'A4', true, 'UTF-8', false);
		$data['mahasiswa'] = $this->Root_model->pilih_data($nim);

		$pdf->AddPage();
		foreach ($data as $data_surat) {
			$image_file = K_PATH_IMAGES . 'logo_perpusnas.png';
			$pdf->Image($image_file, 87, 2, 35, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
			$pdf->Ln(37);
			$pdf->SetFont('times', '', 11);
			//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
			$pdf->Cell(155, 1, "Nomor     : " . $data_surat->no_surat_balasan, 0, 0,);
			$pdf->Cell(34, 1, $data_surat->tanggal_dibuat, 0, 1,);
			$pdf->Cell(189, 1, "Lampiran : " . $data_surat->jumlah_lampiran, 0, 1,);
			$pdf->Cell(189, 1, "Hal           : " . $data_surat->hal_surat, 0, 1,);

			$pdf->Ln(7);
			$pdf->Cell(189, 1, "Kepada", 0, 1,);
			$pdf->Cell(189, 1, "Yth.          : " . $data_surat->kepada, 0, 1,);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "" . $data_surat->instansi, 0, 1,);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "" . $data_surat->tujuan_daerah, 0, 1,);

			$pdf->Ln(7);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "Dengan Hormat,", 0, 1,);

			$pdf->Ln(5);
			// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
			$pdf->MultiCell(19, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(160, 1, "Menindaklanjuti Surat Saudara Nomor " . $data_surat->no_surat . " tanggal " . $data_surat->tglsurat_pemohon . " dengan ini disampaikan bahwa kami bersedia menerima " . "Mahasiswa" . " Saudara yaitu:", 0, 'L', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(10, 1, "", 0, 'J', 0, 1, '', '', true, 0, false, true, 40);

			$pdf->Ln(7);
			$pdf->SetFont('', 'B', 12);
			$pdf->Cell(22, 10, "", 0, 0, 'C');
			$pdf->Cell(50, 10, "Nama", 1, 0, 'C');
			$pdf->Cell(50, 10, "NIM", 1, 0, 'C');
			$pdf->Cell(50, 10, "Program Studi", 1, 0, 'C');
			$pdf->Cell(17, 10, "", 0, 1, 'C');

			$pdf->SetFont('times', ' ', 11);
			$pdf->MultiCell(22, 10, "", 0, 'C', 0, 0, '', '', true, 0, false, true, 10);
			$pdf->MultiCell(50, 10, $data_surat->nama, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
			$pdf->MultiCell(50, 10, $data_surat->nim, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
			$pdf->MultiCell(50, 10, $data_surat->prodi, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
			$pdf->MultiCell(17, 10, "", 0, 'C', 0, 1, '', '', true, 0, false, true, 10);

			if (!empty($data_surat->nama2)) {
				$pdf->MultiCell(22, 10, "", 0, 'C', 0, 0, '', '', true, 0, false, true, 10);
				$pdf->MultiCell(50, 10, $data_surat->nama2, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(50, 10, $data_surat->nim2, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(50, 10, $data_surat->prodi, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(17, 10, "", 0, 'C', 0, 1, '', '', true, 0, false, true, 10);
			} else {
			}

			if (!empty($data_surat->nama3)) {
				$pdf->MultiCell(22, 10, "", 0, 'C', 0, 0, '', '', true, 0, false, true, 10);
				$pdf->MultiCell(50, 10, $data_surat->nama3, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(50, 10, $data_surat->nim3, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(50, 10, $data_surat->prodi, 1, 'C', 0, 0, '', '', true, 0, false, true, 10, 'M');
				$pdf->MultiCell(17, 10, "", 0, 'C', 0, 1, '', '', true, 0, false, true, 10);
			} else {
			}

			$pdf->Ln(3);
			$pdf->MultiCell(19, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(160, 1, "Untuk melakukan program magang di Pusat Pendidikan dan Pelatihan, Perpustakaan Nasional RI, yang dilaksanakan dengan memperhatikan protokol kesehatan yang berlaku. Pelaksanaan program magang berlangsung sejak " . $data_surat->masa_magang . ".", 0, 'L', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(10, 1, "", 0, 'J', 0, 1, '', '', true, 0, false, true, 40);

			$pdf->Ln(13);
			$pdf->MultiCell(19, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(170, 1, "Demikian kami sampaikan, atas kerjasamanya kami ucapkan terimakasih", 0, 'L', 0, 1, '', '', true);

			$pdf->Ln(7);
			$pdf->Cell(94, 1, '', 0, 0);
			$pdf->Cell(95, 1, 'Plt. Kepala Pusat Pendidikan dan Pelatiahan', 0, 1);
			$pdf->Cell(94, 1, '', 0, 0);
			$pdf->Cell(95, 1, 'Perpustakaan Nasional RI,', 0, 1);
			$pdf->Ln(20);
			$pdf->Cell(94, 1, '', 0, 0);
			$pdf->Cell(95, 1, 'Drs. Y. Yahyono, S.IP., M.Si', 0, 1);
			$pdf->Cell(94, 1, '', 0, 0);
			$pdf->Cell(95, 1, 'NIP. 19631110 199103 1 001', 0, 1);

			$pdf->Ln(7);
			$pdf->Cell(189, 1, 'Tembusan :', 0, 1);
			$pdf->Cell(189, 1, '1. Kepala Perpustakaan Nasional RI', 0, 1);
			$pdf->Cell(189, 1, '2. Sekretaris Utama Perpustakaan Nasional RI', 0, 1);


			$pdf->Output('Surat_Jawaban_Magang_' . $data_surat->nama . '.pdf', 'I');
		}
	}
}
