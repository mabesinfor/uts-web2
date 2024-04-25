<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $this->load->view('templates/header');
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('siswa/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'alamat' => $this->input->post('alamat')
        );

        if ($this->Siswa_model->createSiswa($data)) {
            redirect('siswa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan siswa');
            redirect('siswa/create');
        }
    }

    public function read($id)
    {
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $this->load->view('templates/header');
        $this->load->view('siswa/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $this->load->view('templates/header');
        $this->load->view('siswa/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'alamat' => $this->input->post('alamat')
        );

        if ($this->Siswa_model->updateSiswa($id, $data)) {
            redirect('siswa');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate siswa');
            redirect('siswa/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Siswa_model->deleteSiswa($id)) {
            redirect('siswa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus siswa');
            redirect('siswa');
        }
    }
}
