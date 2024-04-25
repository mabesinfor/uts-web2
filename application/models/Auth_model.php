<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function register_user($data)
    {
        return $this->db->insert('users', $data);
    }

    public function login_user($username, $password)
    {
        $this->db->where('username', $username);
        $result = $this->db->get('users')->row_array();

        if (!empty($result)) {
            if (password_verify($password, $result['password'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}