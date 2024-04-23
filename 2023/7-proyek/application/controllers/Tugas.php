<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugas_model');
        $this->load->model('Tim_model');
        $this->load->model('Proyek_model');
    }

    public function index()
    {
        $data['tugas'] = $this->Tugas_model->getAllTugas();
        $this->load->view('templates/header');
        $this->load->view('tugas/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['tim'] = $this->Tim_model->getAllTim();
        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $this->load->view('templates/header');
        $this->load->view('tugas/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'tim_id' => $this->input->post('tim_id'),
            'proyek_id' => $this->input->post('proyek_id')
        );

        if ($this->Tugas_model->createTugas($data)) {
            redirect('tugas');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan tugas');
            redirect('tugas/create');
        }
    }

    public function read($id)
    {
        $data['tugas'] = $this->Tugas_model->getTugasById($id);
        $this->load->view('templates/header');
        $this->load->view('tugas/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['tugas'] = $this->Tugas_model->getTugasById($id);
        $data['tim'] = $this->Tim_model->getAllTim();
        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $this->load->view('templates/header');
        $this->load->view('tugas/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'tim_id' => $this->input->post('tim_id'),
            'proyek_id' => $this->input->post('proyek_id')
        );

        if ($this->Tugas_model->updateTugas($id, $data)) {
            redirect('tugas');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate tugas');
            redirect('tugas/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Tugas_model->deleteTugas($id)) {
            redirect('tugas');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus tugas');
            redirect('tugas');
        }
    }
}