<?php

class model_surat extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('surat');
		return $query->result();
	}

	public function tambah_surat()
	{
		$data = [
			'id_surat' => $this->input->post('id_surat'),
			'no_surat' => $this->input->post('no_surat'),
			'lampiran' => $this->input->post('lampiran'),
			'hal_surat' => $this->input->post('hal_surat'),
			'tglsurat_dibuat' => $this->input->post('tglsurat_dibuat'),
			'kepada_surat' => $this->input->post('kepada_surat'),
			'institusi_surat' => $this->input->post('institusi_surat'),
			'daerah_surat' => $this->input->post('daerah_surat'),
			'no_surat_pemohon' => $this->input->post('no_surat_pemohon'),
			'tglsurat_pemohon' => $this->input->post('tglsurat_pemohon'),
			'masa_magang' => $this->input->post('masa_magang'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'program_studi' => $this->input->post('program_studi'),
			'nama2' => $this->input->post('nama2'),
			'nim2' => $this->input->post('nim2'),
			'program_studi2' => $this->input->post('program_studi2'),
			'nama3' => $this->input->post('nama3'),
			'nim3' => $this->input->post('nim3'),
			'program_studi3' => $this->input->post('program_studi3'),
			'nama4' => $this->input->post('nama4'),
			'nim4' => $this->input->post('nim4'),
			'program_studi4' => $this->input->post('program_studi4'),
			'nama5' => $this->input->post('nama5'),
			'nim5' => $this->input->post('nim5'),
			'program_studi5' => $this->input->post('program_studi5'),
			'nama6' => $this->input->post('nama6'),
			'nim6' => $this->input->post('nim6'),
			'program_studi6' => $this->input->post('program_studi6'),
		];

		$this->db->insert('surat', $data);
	}

	public function edit_surat($id)
	{
		$query = $this->db->get_where('surat', ['id_surat' => $id]);
		return $query->row();
	}

	public function pilih_data($id)
	{
		$query = $this->db->get_where('surat', ['id_surat' => $id]);
		return $query->row();
	}

	public function update_surat()
	{
		$kondisi = ['id_surat' => $this->input->post('id_surat')];

		$data = [
			'no_surat' => $this->input->post('no_surat'),
			'lampiran' => $this->input->post('lampiran'),
			'hal_surat' => $this->input->post('hal_surat'),
			'tglsurat_dibuat' => $this->input->post('tglsurat_dibuat'),
			'kepada_surat' => $this->input->post('kepada_surat'),
			'institusi_surat' => $this->input->post('institusi_surat'),
			'daerah_surat' => $this->input->post('daerah_surat'),
			'no_surat_pemohon' => $this->input->post('no_surat_pemohon'),
			'tglsurat_pemohon' => $this->input->post('tglsurat_pemohon'),
			'masa_magang' => $this->input->post('masa_magang'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'program_studi' => $this->input->post('program_studi'),
			'nama2' => $this->input->post('nama2'),
			'nim2' => $this->input->post('nim2'),
			'program_studi2' => $this->input->post('program_studi2'),
			'nama3' => $this->input->post('nama3'),
			'nim3' => $this->input->post('nim3'),
			'program_studi3' => $this->input->post('program_studi3'),
			'nama4' => $this->input->post('nama4'),
			'nim4' => $this->input->post('nim4'),
			'program_studi4' => $this->input->post('program_studi4'),
			'nama5' => $this->input->post('nama5'),
			'nim5' => $this->input->post('nim5'),
			'program_studi5' => $this->input->post('program_studi5'),
			'nama6' => $this->input->post('nama6'),
			'nim6' => $this->input->post('nim6'),
			'program_studi6' => $this->input->post('program_studi6'),
		];

		$this->db->update('surat', $data, $kondisi);
	}

	public function hapus_surat($id)
	{
		$this->db->delete('surat', ['id_surat' => $id]);
	}
}
