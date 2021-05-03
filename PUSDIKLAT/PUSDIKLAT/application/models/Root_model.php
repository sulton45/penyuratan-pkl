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

	public function getPenlitById($id_penelitian)
	{
		return $this->db->get_where('penelitian', ['id_penelitian' => $id_penelitian])->row_array();
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

	public function hapusData($id)
	{
		$this->db->where('nim', $id);
		$this->db->delete('mahasiswa');
	}
}
