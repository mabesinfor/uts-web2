<?php

namespace App\Controllers;

use App\Models\GuruModel;
use CodeIgniter\HTTP\RedirectResponse;

class Guru extends BaseController
{
    private $guruModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
        helper('form');
        helper('url');
    }

    public function index()
    {
        $data['guru'] = $this->guruModel->findAll();
        return view('guru/index', $data);
    }

    public function create()
    {
        return view('guru/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->guruModel->insert($data);
        return redirect()->to('/guru');
    }

    public function read($id)
    {
        $data['guru'] = $this->guruModel->find($id);
        return view('guru/read', $data);
    }

    public function edit($id)
    {
        $data['guru'] = $this->guruModel->find($id);
        return view('guru/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->guruModel->update($id, $data);
        return redirect()->to('/guru');
    }

    public function delete($id): RedirectResponse
    {
        $this->guruModel->delete($id);
        return redirect()->to('/guru');
    }
}
