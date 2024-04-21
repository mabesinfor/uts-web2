<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use CodeIgniter\HTTP\RedirectResponse;

class Siswa extends BaseController
{
    private $siswaModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        helper('form');
        helper('url');
    }

    public function index()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->siswaModel->insert($data);
        return redirect()->to('/siswa');
    }

    public function read($id)
    {
        $data['siswa'] = $this->siswaModel->find($id);
        return view('siswa/read', $data);
    }

    public function edit($id)
    {
        $data['siswa'] = $this->siswaModel->find($id);
        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->siswaModel->update($id, $data);
        return redirect()->to('/siswa');
    }

    public function delete($id): RedirectResponse
    {
        $this->siswaModel->delete($id);
        return redirect()->to('/siswa');
    }
}
