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
			'tujuan_surat' => $this->input->post('tujuan_surat'),
			'no_surat_pemohon' => $this->input->post('no_surat_pemohon'),
			'tglsurat_pemohon' => $this->input->post('tglsurat_pemohon'),
			'masa_magang' => $this->input->post('masa_magang'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'program_studi' => $this->input->post('program_studi'),
		];

		$this->db->insert('surat', $data);
	}

	public function edit_surat($id)
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
			'tujuan_surat' => $this->input->post('tujuan_surat'),
			'no_surat_pemohon' => $this->input->post('no_surat_pemohon'),
			'tglsurat_pemohon' => $this->input->post('tglsurat_pemohon'),
			'masa_magang' => $this->input->post('masa_magang'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'program_studi' => $this->input->post('program_studi'),
		];

		$this->db->update('surat', $data, $kondisi);
	}

	public function hapus_surat($id)
	{
		$this->db->delete('surat', ['id_surat' => $id]);
	}
}
