<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tim_model');
        $this->load->model('Proyek_model');
    }

    public function index()
    {
        $data['tim'] = $this->Tim_model->getAllTim();
        $this->load->view('templates/header');
        $this->load->view('tim/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $this->load->view('templates/header');
        $this->load->view('tim/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'anggota' => $this->input->post('anggota'),
            'proyek_id' => $this->input->post('proyek_id')
        );

        if ($this->Tim_model->createTim($data)) {
            redirect('tim');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan tim');
            redirect('tim/create');
        }
    }

    public function read($id)
    {
        $data['tim'] = $this->Tim_model->getTimById($id);
        $this->load->view('templates/header');
        $this->load->view('tim/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['tim'] = $this->Tim_model->getTimById($id);
        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $this->load->view('templates/header');
        $this->load->view('tim/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'anggota' => $this->input->post('anggota'),
            'proyek_id' => $this->input->post('proyek_id')
        );

        if ($this->Tim_model->updateTim($id, $data)) {
            redirect('tim');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate tim');
            redirect('tim/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Tim_model->deleteTim($id)) {
            redirect('tim');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tim');
            redirect('tim');
        }
    }
}