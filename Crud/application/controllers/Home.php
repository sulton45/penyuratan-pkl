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
				'field' => 'tujuan_surat',
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

	public function pdf()
	{
		// create new PDF document
		$pdf = new MYPDF('p', 'mm', 'A4', true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Perpusnas');
		$pdf->SetTitle('Surat Magang');
		$pdf->SetSubject('');
		$pdf->SetKeywords('');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
		$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

		// set header and footer fonts
		$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
			require_once(dirname(__FILE__) . '/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// set default font subsetting mode
		$pdf->setFontSubsetting(true);

		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		$pdf->SetFont('dejavusans', '', 14, '', true);

		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$pdf->Output('jawaban_surat_magang.pdf', 'I');
	}
}
