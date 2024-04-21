<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->model('Siswa_model');
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        $this->load->view('templates/header');
        $this->load->view('nilai/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['guru'] = $this->Guru_model->getAllGuru();
        $this->load->view('templates/header');
        $this->load->view('nilai/create', $data);
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'guru_id' => $this->input->post('guru_id'),
            'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            'nilai' => $this->input->post('nilai')
        );

        if ($this->Nilai_model->createNilai($data)) {
            redirect('nilai');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan nilai');
            redirect('nilai/create');
        }
    }

    public function read($id)
    {
        $data['nilai'] = $this->Nilai_model->getNilaiById($id);
        $this->load->view('templates/header');
        $this->load->view('nilai/read', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['nilai'] = $this->Nilai_model->getNilaiById($id);
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $data['guru'] = $this->Guru_model->getAllGuru();
        $this->load->view('templates/header');
        $this->load->view('nilai/update', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data = array(
            'siswa_id' => $this->input->post('siswa_id'),
            'guru_id' => $this->input->post('guru_id'),
            'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            'nilai' => $this->input->post('nilai')
        );

        if ($this->Nilai_model->updateNilai($id, $data)) {
            redirect('nilai');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate nilai');
            redirect('nilai/update/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->Nilai_model->deleteNilai($id)) {
            redirect('nilai');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus nilai');
            redirect('nilai');
        }
    }
}