<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', array('id' => $id))->row_array();
    }

    public function createSiswa($data)
    {
        return $this->db->insert('siswa', $data);
    }

    public function updateSiswa($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('siswa', $data);
    }

    public function deleteSiswa($id)
    {
        return $this->db->delete('siswa', array('id' => $id));
    }
}