<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Video extends BaseController
{
    protected $video;

    function __construct()
    {
        $this->video = new VideoModel();
    }

    public function index()
    {
        $data['video'] = $this->video->findAll();
        return view('Admin/Kategori_Video/Video_Berita', $data);
    }

    public function create()
    {
        return view('Admin/video/Tambah_video');
    }

    public function store()
    {
        if (!$this->validate([
            'nama_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'list_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->video->insert([
            'nama_video' => $this->request->getVar('nama_video'),
            'list_video' => $this->request->getVar('list_video')

        ]);
        session()->setFlashdata('message', 'Tambah video Berhasil');
        return redirect()->to('/Video');
    }

    function edit($id)
    {
        $datavideo = $this->video->find($id);
        if (empty($datavideo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data video Tidak ditemukan !');
        }
        $data['video'] = $datavideo;
        return view('Admin/video/Edit_video', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'list_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->video->update($id, [
            'nama_video' => $this->request->getVar('nama_video'),
            'list_video' => $this->request->getVar('list_video')

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Video');
    }

    function delete($id)
    {
        $datavideo = $this->video->find($id);
        if (empty($datavideo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data video Tidak ditemukan !');
        }
        $this->video->delete($id);
        session()->setFlashdata('message', 'Delete video Berhasil');
        return redirect()->to('/Video');
    }
}
