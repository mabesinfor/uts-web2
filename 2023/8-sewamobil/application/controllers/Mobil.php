<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
    }

    public function index()
    {
        $data['mobil'] = $this->Mobil_model->getAllMobil();
        $this->load->view('templates/header');
        $this->load->view('mobil/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('mobil/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'harga_sewa_per_hari' => $this->input->post('harga_sewa_per_hari')
        );

        if ($this->Mobil_model->createMobil($data)) {
            redirect('mobil');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan mobil');
            redirect('mobil/create');
        }
    }

    public function read($id)
    {
        $data['mobil'] = $this->Mobil_model->getMobilById($id);
        $this->load->view('templates/header');
        $this->load->view('mobil/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['mobil'] = $this->Mobil_model->getMobilById($id);
        $this->load->view('templates/header');
        $this->load->view('mobil/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'harga_sewa_per_hari' => $this->input->post('harga_sewa_per_hari')
        );

        if ($this->Mobil_model->updateMobil($id, $data)) {
            redirect('mobil');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate mobil');
            redirect('mobil/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Mobil_model->deleteMobil($id)) {
            redirect('mobil');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus mobil');
            redirect('mobil');
        }
    }
}