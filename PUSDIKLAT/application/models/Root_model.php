<?php

/**
 * summary
 */
class Root_model extends CI_Model
{
	/**
	 * summary
	 */
	public function getAllmahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function searchMahasiswa()
	{
		$keyword = $this->input->post("keyword", true);
		$this->db->like('nama', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}

	public function getAllpenlit()
	{
		return $this->db->get('penelitian')->result_array();
	}

	public function getMahasiswaById($nim)
	{
		return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
	}

	public function pilih_data($nim)
	{
		$query = $this->db->get_where('mahasiswa', ['nim' => $nim]);
		return $query->row();
	}

	public function getPenlitById($id_penelitian)
	{
		return $this->db->get_where('penelitian', ['id_penelitian' => $id_penelitian])->row_array();
	}

	public function editDataMahasiswa()

	{
		$nim = $this->input->post('nim', true);
		$no_surat_balasan = $this->input->post('no_surat_balasan', true);
		$jumlah_lampiran = $this->input->post('jumlah_lampiran', true);
		$hal_surat = $this->input->post('hal_surat', true);
		$tanggal_dibuat = $this->input->post('tanggal_dibuat', true);
		$kepada = $this->input->post('kepada', true);
		$instansi = $this->input->post('instansi', true);
		$tujuan_daerah = $this->input->post('tujuan_daerah', true);
		$no_surat = $this->input->post('no_surat', true);
		$tglsurat_pemohon = $this->input->post('tglsurat_pemohon', true);
		$masa_magang = $this->input->post('masa_magang', true);
		$nama = $this->input->post('nama', true);
		$nama2 = $this->input->post('nama2', true);
		$nim2 = $this->input->post('nim2', true);
		$nama3 = $this->input->post('nama3', true);
		$nim3 = $this->input->post('nim3', true);


		$data = array(
			'no_surat_balasan' => $no_surat_balasan,
			'jumlah_lampiran' => $jumlah_lampiran,
			'hal_surat' => $hal_surat,
			'tanggal_dibuat' => $tanggal_dibuat,
			'kepada' => $kepada,
			'instansi' => $instansi,
			'tujuan_daerah' => $tujuan_daerah,
			'no_surat' => $no_surat,
			'tglsurat_pemohon' => $tglsurat_pemohon,
			'masa_magang' => $masa_magang,
			'nama' => $nama,
			'nama2' => $nama2,
			'nim2' => $nim2,
			'nama3' => $nama3,
			'nim3' => $nim3,
		);
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	public function hapusData($id)
	{
		$this->db->where('nim', $id);
		$this->db->delete('mahasiswa');
	}
}
