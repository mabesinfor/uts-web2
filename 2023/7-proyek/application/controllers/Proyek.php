<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proyek_model');
    }

    public function index()
    {
        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $this->load->view('templates/header');
        $this->load->view('proyek/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('proyek/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'deadline' => $this->input->post('deadline')
        );

        if ($this->Proyek_model->createProyek($data)) {
            redirect('proyek');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan proyek');
            redirect('proyek/create');
        }
    }

    public function read($id)
    {
        $data['proyek'] = $this->Proyek_model->getProyekById($id);
        $this->load->view('templates/header');
        $this->load->view('proyek/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['proyek'] = $this->Proyek_model->getProyekById($id);
        $this->load->view('templates/header');
        $this->load->view('proyek/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'deadline' => $this->input->post('deadline')
        );

        if ($this->Proyek_model->updateProyek($id, $data)) {
            redirect('proyek');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate proyek');
            redirect('proyek/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Proyek_model->deleteProyek($id)) {
            redirect('proyek');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus proyek');
            redirect('proyek');
        }
    }
}