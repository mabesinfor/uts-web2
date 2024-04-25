<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_model extends CI_Model {

    public function getAllTim()
    {
        $this->db->select('tim.id, tim.nama, tim.anggota, proyek.nama as proyek');
        $this->db->from('tim');
        $this->db->join('proyek', 'tim.proyek_id = proyek.id');
        return $this->db->get()->result_array();
    }

    public function getTimById($id)
    {
        $this->db->select('tim.id, tim.nama, tim.anggota, proyek.nama as proyek');
        $this->db->from('tim');
        $this->db->join('proyek', 'tim.proyek_id = proyek.id');
        $this->db->where('tim.id', $id);
        return $this->db->get()->row_array();
    }

    public function createTim($data)
    {
        return $this->db->insert('tim', $data);
    }

    public function updateTim($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tim', $data);
    }

    public function deleteTim($id)
    {
        return $this->db->delete('tim', array('id' => $id));
    }
}