<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sewa_model');
        $this->load->model('Mobil_model');
        $this->load->model('Penyewa_model');
    }

    public function index()
    {
        $data['sewa'] = $this->Sewa_model->getAllSewa();
        $this->load->view('templates/header');
        $this->load->view('sewa/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['mobil'] = $this->Mobil_model->getAllMobil();
        $data['penyewa'] = $this->Penyewa_model->getAllPenyewa();
        $this->load->view('templates/header');
        $this->load->view('sewa/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'mobil_id' => $this->input->post('mobil_id'),
            'penyewa_id' => $this->input->post('penyewa_id'),
            'tanggal_sewa' => $this->input->post('tanggal_sewa'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian')
        );

        if ($this->Sewa_model->createSewa($data)) {
            redirect('sewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan sewa');
            redirect('sewa/create');
        }
    }

    public function read($id)
    {
        $data['sewa'] = $this->Sewa_model->getSewaById($id);
        $this->load->view('templates/header');
        $this->load->view('sewa/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['sewa'] = $this->Sewa_model->getSewaById($id);
        $data['mobil'] = $this->Mobil_model->getAllMobil();
        $data['penyewa'] = $this->Penyewa_model->getAllPenyewa();
        $this->load->view('templates/header');
        $this->load->view('sewa/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'mobil_id' => $this->input->post('mobil_id'),
            'penyewa_id' => $this->input->post('penyewa_id'),
            'tanggal_sewa' => $this->input->post('tanggal_sewa'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian')
        );

        if ($this->Sewa_model->updateSewa($id, $data)) {
            redirect('sewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate sewa');
            redirect('sewa/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Sewa_model->deleteSewa($id)) {
            redirect('sewa');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus sewa');
            redirect('sewa');
        }
    }
}