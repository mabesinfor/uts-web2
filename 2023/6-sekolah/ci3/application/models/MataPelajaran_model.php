<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataPelajaranModel extends CI_Model {
    public function getByGuruId($guru_id) {
        $this->db->where('guru_id', $guru_id);
        $query = $this->db->get('mata_pelajaran');
        return $query->result_array();
    }
}