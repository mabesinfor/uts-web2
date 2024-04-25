<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('welcome');
        } else {
            $this->load->view('auth/login');
        }
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function register_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email')
            );

            if ($this->Auth_model->register_user($data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil, silakan login.');
                redirect('auth');
            } else {
                $this->session->set_flashdata('error', 'Registrasi gagal, coba lagi.');
                $this->register();
            }
        }
    }

    public function login_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->Auth_model->login_user($username, $password)) {
                $user_data = array(
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                redirect('welcome');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah.');
                $this->index();
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}