<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

    public function getAllNilai()
    {
        $this->db->select('penilaian.id, siswa.nama as siswa, guru.nama as guru, penilaian.mata_pelajaran, penilaian.nilai');
        $this->db->from('penilaian');
        $this->db->join('siswa', 'penilaian.siswa_id = siswa.id');
        $this->db->join('guru', 'penilaian.guru_id = guru.id');
        return $this->db->get()->result_array();
    }

    public function getNilaiById($id)
    {
        $this->db->select('penilaian.id, siswa.nama as siswa, guru.nama as guru, penilaian.mata_pelajaran, penilaian.nilai');
        $this->db->from('penilaian');
        $this->db->join('siswa', 'penilaian.siswa_id = siswa.id');
        $this->db->join('guru', 'penilaian.guru_id = guru.id');
        $this->db->where('penilaian.id', $id);
        return $this->db->get()->row_array();
    }

    public function createNilai($data)
    {
        return $this->db->insert('penilaian', $data);
    }

    public function updateNilai($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('penilaian', $data);
    }

    public function deleteNilai($id)
    {
        return $this->db->delete('penilaian', array('id' => $id));
    }
}