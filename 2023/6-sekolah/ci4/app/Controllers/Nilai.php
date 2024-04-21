<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use App\Models\SiswaModel;
use App\Models\GuruModel;
use CodeIgniter\HTTP\RedirectResponse;

class Nilai extends BaseController
{
    private $nilaiModel;
    private $siswaModel;
    private $guruModel;

    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();
        $this->siswaModel = new SiswaModel();
        $this->guruModel = new GuruModel();
        helper('form');
        helper('url');
    }

    public function index()
    {
        $this->nilaiModel->select('nilai.*, siswa.nama as siswa_nama, guru.nama as guru_nama');
        $this->nilaiModel->join('siswa', 'siswa.id = nilai.siswa_id', 'left');
        $this->nilaiModel->join('guru', 'guru.id = nilai.guru_id', 'left');
        $data['nilai'] = $this->nilaiModel->findAll();
        $data['siswa'] = $this->siswaModel->findAll();
        $data['guru'] = $this->guruModel->findAll();
        return view('nilai/index', $data);
    }

    public function create()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        $data['guru'] = $this->guruModel->findAll();
        return view('nilai/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->nilaiModel->insert($data);
        return redirect()->to('/nilai');
    }

    public function read($id)
    {
        $this->nilaiModel->select('nilai.*, siswa.nama as siswa_nama, guru.nama as guru_nama');
        $this->nilaiModel->join('siswa', 'siswa.id = nilai.siswa_id');
        $this->nilaiModel->join('guru', 'guru.id = nilai.guru_id');
        $data['nilai'] = $this->nilaiModel->find($id);
        return view('nilai/read', $data);
    }

    public function edit($id)
    {
        $data['nilai'] = $this->nilaiModel->find($id);
        $data['siswa'] = $this->siswaModel->findAll();
        $data['guru'] = $this->guruModel->findAll();
        return view('nilai/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->nilaiModel->update($id, $data);
        return redirect()->to('/nilai');
    }

    public function delete($id): RedirectResponse
    {
        $this->nilaiModel->delete($id);
        return redirect()->to('/nilai');
    }
}
