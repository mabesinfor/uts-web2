<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['guru'] = $this->Guru_model->getAllGuru();
        $this->load->view('templates/header');
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('guru/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            'no_telp' => $this->input->post('no_telp')
        );

        if ($this->Guru_model->createGuru($data)) {
            redirect('guru');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan guru');
            redirect('guru/create');
        }
    }

    public function read($id)
    {
        $data['guru'] = $this->Guru_model->getGuruById($id);
        $this->load->view('templates/header');
        $this->load->view('guru/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['guru'] = $this->Guru_model->getGuruById($id);
        $this->load->view('templates/header');
        $this->load->view('guru/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            'no_telp' => $this->input->post('no_telp')
        );

        if ($this->Guru_model->updateGuru($id, $data)) {
            redirect('guru');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate guru');
            redirect('guru/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Guru_model->deleteGuru($id)) {
            redirect('guru');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus guru');
            redirect('guru');
        }
    }
}