<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penyewa_model');
    }

    public function index()
    {
        $data['penyewa'] = $this->Penyewa_model->getAllPenyewa();
        $this->load->view('templates/header');
        $this->load->view('penyewa/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('penyewa/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );

        if ($this->Penyewa_model->createPenyewa($data)) {
            redirect('penyewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan penyewa');
            redirect('penyewa/create');
        }
    }

    public function read($id)
    {
        $data['penyewa'] = $this->Penyewa_model->getPenyewaById($id);
        $this->load->view('templates/header');
        $this->load->view('penyewa/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['penyewa'] = $this->Penyewa_model->getPenyewaById($id);
        $this->load->view('templates/header');
        $this->load->view('penyewa/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );

        if ($this->Penyewa_model->updatePenyewa($id, $data)) {
            redirect('penyewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate penyewa');
            redirect('penyewa/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Penyewa_model->deletePenyewa($id)) {
            redirect('penyewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus penyewa');
            redirect('penyewa');
        }
    }
}