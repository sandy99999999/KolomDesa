<?php

namespace App\Controllers;

use App\Models\FotoModel;

class Foto extends BaseController
{
    protected $foto;

    function __construct()
    {
        $this->foto = new FotoModel();
    }

    // public function view()
    // {
    //     $data['foto'] = $this->foto->findAll();
    //     return view('Pages/home', $data);
    // }

    public function index()
    {

        $data['foto'] = $this->foto->findAll();
        return view('Admin/Foto/Foto_Berita', $data);
    }

    public function create()
    {
        return view('Admin/Foto/Tambah_foto');
    }

    public function store()
    {
        if (!$this->validate([
            'nama_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'list_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->foto->insert([
            'nama_foto' => $this->request->getVar('nama_foto'),
            'list_foto' => $this->request->getVar('list_foto')
            
        ]);
        session()->setFlashdata('message', 'Tambah foto Berhasil');
        return redirect()->to('/Foto');
    }

    function edit($id)
    {
        $datafoto = $this->foto->find($id);
        if (empty($datafoto)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data foto Tidak ditemukan !');
        }
        $data['foto'] = $datafoto;
        return view('Admin/Foto/Edit_foto', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'list_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->foto->update($id, [
             'nama_foto' => $this->request->getVar('nama_foto'),
            'list_foto' => $this->request->getVar('list_foto')
            
        ]);
        session()->setFlashdata('message', 'Update Data foto Berhasil');
        return redirect()->to('/Foto');
    }

    function delete($id)
    {
        $datafoto = $this->foto->find($id);
        if (empty($datafoto)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data foto Tidak ditemukan !');
        }
        $this->foto->delete($id);
        session()->setFlashdata('message', 'Delete foto Berhasil');
        return redirect()->to('/Foto');
    }

}