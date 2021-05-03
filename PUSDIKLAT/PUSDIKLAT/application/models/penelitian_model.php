<?php

/**
 * summary
 */
class Penelitian_model extends CI_model
{
    /**
     * summary
     */
    public function getAllmahasiswa()
    {
    	return $this->db->get('penelitian')->result_array();
    }

    public function tambahDataPenelitian($data)
    {
    	$this->db->insert('penelitian', $data);
    }
}