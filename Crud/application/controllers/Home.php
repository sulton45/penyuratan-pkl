<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_surat');
		$this->load->helper(['url_helper', 'form']);
		$this->load->library(['form_validation', 'session', 'pdf']);
	}

	/*public function index($page = 'home_view')
	{
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = 'Beranda';
		$data['jembut'] = 'LOL';

		$this->load->view($page, $data);
	}

	public function about($page = 'about')
	{
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = 'About';

		$this->load->view($page, $data);
	}*/

	public function lihatdata()
	{
		$data['database'] = $this->model_surat->get_all_data();

		$data['title'] = "Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function formtambah()
	{
		$data['title'] = "Tambah Data | Test tampil Database";

		$this->load->view('templates/header', $data);
		$this->load->view('formtambah');
		$this->load->view('templates/footer');
	}

	public function tambahsurat()
	{


		$this->validasi();

		if ($this->form_validation->run() === FALSE) {
			$this->formtambah();
		} else {
			$this->model_surat->tambah_surat();
			$this->session->set_flashdata('input_sukses', 'Data Surat berhasil di input');
			redirect(current_url());
		}
	}

	public function hapusdata($id)
	{
		$this->model_surat->hapus_surat($id);
		$this->session->set_flashdata('hapus_sukses', 'Data Surat berhasil di hapus');
		redirect('/home/lihatdata');
	}

	public function formedit($id)
	{
		$data['title'] = 'Edit Data | Test tampil Database';

		$data['db'] = $this->model_surat->edit_surat($id);

		$this->load->view('templates/header', $data);
		$this->load->view('formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updatesurat($id)
	{
		$this->validasi();

		if ($this->form_validation->run() === FALSE) {
			$this->formedit($id);
		} else {
			$this->model_surat->update_surat();
			$this->session->set_flashdata('update_sukses', 'Data Surat berhasil diperbaharui');
			redirect('/home/lihatdata');
		}
	}

	public function validasi()
	{
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');

		$config = [
			[
				'field' => 'no_surat',
				'label' => 'Nomor Surat',
				'rules' => 'required'
			],
			[
				'field' => 'lampiran',
				'label' => 'Lampiran',
				'rules' => 'required'
			],
			[
				'field' => 'hal_surat',
				'label' => 'Hal Surat',
				'rules' => 'required'
			],
			[
				'field' => 'tglsurat_dibuat',
				'label' => 'Tanggal Surat Dibuat Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'kepada_surat',
				'label' => 'Tujuan Surat Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'institusi_surat',
				'label' => 'Tujuan Surat Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'daerah_surat',
				'label' => 'Tujuan Surat Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'no_surat_pemohon',
				'label' => 'Nomor Surat Pemohon Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'tglsurat_pemohon',
				'label' => 'Tanggal Surat Pemohon Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'masa_magang',
				'label' => 'Masa Pelaksanaan Magang Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'nama',
				'label' => 'Nama Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'nim',
				'label' => 'NIM/NIS Tidak Boleh Kosong',
				'rules' => 'required'
			],
			[
				'field' => 'program_studi',
				'label' => 'Program Studi Tidak Boleh Kosong',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_rules($config);
	}

	public function pdf($id)
	{


		// create new PDF document
		$pdf = new MYPDF('p', 'mm', 'A4', true, 'UTF-8', false);
		$data['db'] = $this->model_surat->pilih_data($id);

		$pdf->AddPage();
		foreach ($data as $data_surat) {
			$pdf->Ln(38);
			$pdf->SetFont('times', '', 11);
			$pdf->Cell(155, 1, "Nomor     : " . $data_surat->no_surat, 0, 0,);
			$pdf->Cell(34, 1, $data_surat->tglsurat_dibuat, 0, 1,);
			$pdf->Cell(189, 1, "Lampiran : " . $data_surat->lampiran, 0, 1,);
			$pdf->Cell(189, 1, "Hal           : " . $data_surat->hal_surat, 0, 1,);

			$pdf->Ln(10);
			$pdf->Cell(189, 1, "Kepada", 0, 1,);
			$pdf->Cell(189, 1, "Yth.          : " . $data_surat->kepada_surat, 0, 1,);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "" . $data_surat->institusi_surat, 0, 1,);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "" . $data_surat->daerah_surat, 0, 1,);

			$pdf->Ln(10);
			$pdf->Cell(19, 1, "", 0, 0,);
			$pdf->Cell(170, 1, "Dengan Hormat,", 0, 1,);

			$pdf->Ln(5);
			// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
			$pdf->MultiCell(19, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(160, 1, "Menindaklanjuti Surat Saudara Nomor " . $data_surat->no_surat_pemohon . " tanggal " . $data_surat->tglsurat_pemohon . " dengan ini disampaikan bahwa kami bersedia menerima mahasiswa Saudara yaitu:", 0, 'L', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(10, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);

			$pdf->Ln(15);
			$pdf->SetFont('', 'B', 12);
			$pdf->Cell(22, 8, "", 0, 0, 'C');
			$pdf->Cell(50, 8, "Nama", 1, 0, 'C');
			$pdf->Cell(50, 8, "NIM", 1, 0, 'C');
			$pdf->Cell(50, 8, "Program Studi", 1, 0, 'C');
			$pdf->Cell(17, 8, "", 0, 1, 'C');

			$pdf->SetFont('times', ' ', 11);
			$pdf->Cell(22, 8, "", 0, 0, 'C');
			$pdf->Cell(50, 8, $data_surat->nama, 1, 0, 'C');
			$pdf->Cell(50, 8, $data_surat->nim, 1, 0, 'C');
			$pdf->Cell(50, 8, $data_surat->program_studi, 1, 0, 'C');
			$pdf->Cell(17, 8, "", 0, 1, 'C');
			if ($data_surat->nama2 == '') {
			} else {
				$pdf->Cell(50, 8, $data_surat->program_studi, 1, 0, 'C');
			}

			$pdf->Ln(15);
			$pdf->MultiCell(19, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(160, 1, "Untuk melakukan program magang di Pusat Pendidikan dan Pelatihan, Perpustakaan Nasional RI, yang dilaksanakan dengan memperhatikan protokol kesehatan yang berlaku. Pelaksanaan program magang berlangsung sejak " . $data_surat->masa_magang . ".", 0, 'L', 0, 0, '', '', true, 0, false, true, 40);
			$pdf->MultiCell(10, 1, "", 0, 'J', 0, 0, '', '', true, 0, false, true, 40);


			$pdf->Output('jawaban_surat_magang_' . $data_surat->nama . '.pdf', 'I');
		}


		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.

	}
}
