<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_model extends CI_Model {

    public function getAllTugas()
    {
        $this->db->select('tugas.id, tugas.deskripsi, tim.nama as tim, proyek.nama as proyek');
        $this->db->from('tugas');
        $this->db->join('tim', 'tugas.tim_id = tim.id');
        $this->db->join('proyek', 'tugas.proyek_id = proyek.id');
        return $this->db->get()->result_array();
    }

    public function getTugasById($id)
    {
        $this->db->select('tugas.id, tugas.deskripsi, tim.nama as tim, proyek.nama as proyek');
        $this->db->from('tugas');
        $this->db->join('tim', 'tugas.tim_id = tim.id');
        $this->db->join('proyek', 'tugas.proyek_id = proyek.id');
        $this->db->where('tugas.id', $id);
        return $this->db->get()->row_array();
    }

    public function createTugas($data)
    {
        return $this->db->insert('tugas', $data);
    }

    public function updateTugas($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tugas', $data);
    }

    public function deleteTugas($id)
    {
        return $this->db->delete('tugas', array('id' => $id));
    }
}