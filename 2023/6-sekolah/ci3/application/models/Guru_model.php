<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

    public function getAllGuru()
    {
        return $this->db->get('guru')->result_array();
    }

    public function getGuruById($id)
    {
        return $this->db->get_where('guru', array('id' => $id))->row_array();
    }

    public function createGuru($data)
    {
        return $this->db->insert('guru', $data);
    }

    public function updateGuru($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('guru', $data);
    }

    public function deleteGuru($id)
    {
        return $this->db->delete('guru', array('id' => $id));
    }
}