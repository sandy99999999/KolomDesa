<?php

namespace App\Controllers;

use App\Models\TagModel;

class Tag extends BaseController
{
    protected $tag_berita;

    function __construct()
    {
        $this->tag_berita = new TagModel();
    }

    public function index()
    {
        $data['tag_berita'] = $this->tag_berita->findAll();
        return view('Admin/tag_Berita/Tag_berita', $data);
    }

    public function create()
    {
        return view('Admin/tag_Berita/Tambah_Tag');
    }

    public function store()
    {
        if (!$this->validate([
            'list_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->tag_berita->insert([
            'list_tag' => $this->request->getVar('list_tag')
            
        ]);
        session()->setFlashdata('message', 'Tambah Tag Berita Berhasil');
        return redirect()->to('/Tag_Berita');
    }

    function edit($id)
    {
        $datatag_berita = $this->tag_berita->find($id);
        if (empty($datatag_berita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tag Berita Tidak ditemukan !');
        }
        $data['tag_berita'] = $datatag_berita;
        return view('Admin/tag_Berita/Edit_Tag', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'list_tag' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->tag_berita->update($id, [
            'list_tag' => $this->request->getVar('list_tag')
            
        ]);
        session()->setFlashdata('message', 'Update Data Tag Berita Berhasil');
        return redirect()->to('/Tag_Berita');
    }

    function delete($id)
    {
        $datatag_berita = $this->tag_berita->find($id);
        if (empty($datatag_berita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tag Tidak ditemukan !');
        }
        $this->tag_berita->delete($id);
        session()->setFlashdata('message', 'Delete Data Tag Berita Berhasil');
        return redirect()->to('/Tag_Berita');
    }

}