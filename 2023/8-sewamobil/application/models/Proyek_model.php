<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek_model extends CI_Model {

    public function getAllProyek()
    {
        return $this->db->get('proyek')->result_array();
    }

    public function getProyekById($id)
    {
        return $this->db->get_where('proyek', array('id' => $id))->row_array();
    }

    public function createProyek($data)
    {
        return $this->db->insert('proyek', $data);
    }

    public function updateProyek($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('proyek', $data);
    }

    public function deleteProyek($id)
    {
        return $this->db->delete('proyek', array('id' => $id));
    }
}