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

	public function searchPenelitian()
	{
		$keyword = $this->input->post("keyword", true);
		$this->db->like('nama', $keyword);
		return $this->db->get('penelitian')->result_array();
	}

	public function getAllpenlit()
	{
		return $this->db->get('penelitian')->result_array();
	}

	public function getMahasiswaById($nim)
	{
		return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
	}

	public function getPenlitById($id_penelitian)
	{
		return $this->db->get_where('penelitian', ['id_penelitian' => $id_penelitian])->row_array();
	}

	public function pilih_data($nim)
	{
		$query = $this->db->get_where('mahasiswa', ['nim' => $nim]);
		return $query->row();
	}

	public function pilih_data2($id_penelitian)
	{
		$query = $this->db->get_where('penelitian', ['id_penelitian' => $id_penelitian]);
		return $query->row();
	}



	public function editDataMahasiswa()

	{
		$nim = $this->input->post('nim', true);
		$nama = $this->input->post('nama', true);
		$no_telp = $this->input->post('no_telp', true);
		$unit = $this->input->post('unit', true);
		$tanggal_masuk = $this->input->post('tanggal_masuk', true);
		$tanggal_keluar = $this->input->post('tanggal_keluar', true);

		$data = array(
			'nama' => $nama,
			'no_telp' => $no_telp,
			'unit' => $unit,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_keluar' => $tanggal_keluar
		);
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	public function editDataSurat()

	{
		$nim = $this->input->post('nim', true);
		$hal_surat = $this->input->post('hal_surat', true);
		$no_surat_balasan = $this->input->post('no_surat_balasan', true);
		$jumlah_lampiran = $this->input->post('jumlah_lampiran', true);
		$kepada = $this->input->post('kepada', true);
		$instansi = $this->input->post('instansi', true);
		$tujuan_daerah = $this->input->post('tujuan_daerah', true);
		$no_surat = $this->input->post('no_surat', true);
		$tglsurat_pemohon = $this->input->post('tglsurat_pemohon', true);
		$tgl_dibuat = $this->input->post('tgl_dibuat', true);
		$tanggal_masuk = $this->input->post('tanggal_masuk', true);
		$tanggal_keluar = $this->input->post('tanggal_keluar', true);
		$nama = $this->input->post('nama', true);
		$nama2 = $this->input->post('nama2', true);
		$nim2 = $this->input->post('nim2', true);
		$nama3 = $this->input->post('nama3', true);
		$nim3 = $this->input->post('nim3', true);


		$data = array(
			'hal_surat' => $hal_surat,
			'no_surat_balasan' => $no_surat_balasan,
			'jumlah_lampiran' => $jumlah_lampiran,
			'kepada' => $kepada,
			'instansi' => $instansi,
			'tujuan_daerah' => $tujuan_daerah,
			'no_surat' => $no_surat,
			'tglsurat_pemohon' => $tglsurat_pemohon,
			'tgl_dibuat' => $tgl_dibuat,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_keluar' => $tanggal_keluar,
			'nama' => $nama,
			'nama2' => $nama2,
			'nim2' => $nim2,
			'nama3' => $nama3,
			'nim3' => $nim3,
		);
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}

	public function editDataPenelitian()

	{

		$id_penelitian = $this->input->post('id_penelitian', true);
		$nama = $this->input->post('nama', true);
		$nim = $this->input->post('nim', true);
		$no_surat = $this->input->post('no_surat', true);
		$hal_surat = $this->input->post('hal_surat', true);
		$judul = $this->input->post('judul', true);
		$jumlah_lampiran = $this->input->post('jumlah_lampiran', true);
		$kepada = $this->input->post('kepada', true);
		$instansi = $this->input->post('instansi', true);
		$tujuan_daerah = $this->input->post('tujuan_daerah', true);
		$tglsurat_pemohon = $this->input->post('tglsurat_pemohon', true);
		$tujuan_penelitian = $this->input->post('tujuan_penelitian', true);
		$metode_ambil_data = $this->input->post('metode_ambil_data', true);


		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'no_surat' => $no_surat,
			'hal_surat' => $hal_surat,
			'judul' => $judul,
			'jumlah_lampiran' => $jumlah_lampiran,
			'kepada' => $kepada,
			'instansi' => $instansi,
			'tujuan_daerah' => $tujuan_daerah,
			'tglsurat_pemohon' => $tglsurat_pemohon,
			'tujuan_penelitian' => $tujuan_penelitian,
			'metode_ambil_data' => $metode_ambil_data,
		);
		$this->db->where('id_penelitian', $id_penelitian);
		$this->db->update('penelitian', $data);
	}


	public function hapusData($id)
	{
		$this->db->where('nim', $id);
		$this->db->delete('mahasiswa');
	}
}
