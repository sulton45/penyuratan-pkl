<?php

/**
 * summary
 */
class Admin_model extends CI_Model
{
    /**
     * summary
     */
    public function getAllmahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getMahasiswaById($nim)
	{
		return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
	}

	public function editStatus()

	{
		$nim = $this->input->post('nim');
		$status = $this->input->post('status');

		$data = array(
			'status' => $status
		);
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}
}