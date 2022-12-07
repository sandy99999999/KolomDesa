<?php

namespace App\Controllers;

use App\Models\IklanModel;

class Iklan extends BaseController
{
    protected $iklan;

    function __construct()
    {
        $this->iklan = new IklanModel();
    }

    public function index_iklan()
    {
        $data['iklan'] = $this->iklan->findAll();
        return view('Admin/Iklan/List_Iklan', $data);
    }

    public function create()
    {
        return view('Admin/Iklan/Tambah_Iklan');
    }

    public function store()
    {
        if (!$this->validate([
            'judul_iklan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'kategori_iklan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'gambar_iklan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->iklan->insert([
            'judul_iklan' => $this->request->getVar('judul_iklan'),
            'kategori_iklan' => $this->request->getVar('kategori_iklan'),
            'gambar_iklan' => $this->request->getVar('gambar_iklan'),
            

        ]);
        session()->setFlashdata('message', 'Tambah foto Berhasil');
        return redirect()->to('/Iklan_Berita');
    }

    function edit_foto($id)
    {
        $datafoto = $this->foto->find($id);
        if (empty($datafoto)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data foto Tidak ditemukan !');
        }
        $data['foto'] = $datafoto;
        return view('Admin/Foto/Edit_foto', $data);
    }

    public function update_foto($id)
    {
        if (!$this->validate([
            'judul_foto' => [
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

            'ket_foto' => [
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
            'judul_foto' => $this->request->getVar('judul_foto'),
            'list_foto' => $this->request->getVar('list_foto'),
            'ket_foto' => $this->request->getVar('ket_foto'),
            'deskripsi_foto' => $this->request->getVar('deskripsi_foto')

        ]);
        session()->setFlashdata('message', 'Update Data foto Berhasil');
        return redirect()->to('/Berita_Foto');
    }

    function delete_foto($id)
    {
        $datafoto = $this->foto->find($id);
        if (empty($datafoto)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data foto Tidak ditemukan !');
        }
        $this->foto->delete($id);
        session()->setFlashdata('message', 'Delete foto Berhasil');
        return redirect()->to('/Berita_Foto');
    }

    function Detail_foto($id)
    {
        $datafoto = $this->foto->find($id);
        if (empty($datafoto)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Foto Tidak ditemukan !');
        }
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['foto'] = $datafoto;
        return view('Admin/Foto/DetailFoto', $data);
    }


    //Video
    public function index_video()
    {
        $data['video'] = $this->video->findAll();
        return view('Admin/Video/Video_Berita', $data);
    }

    public function create_video()
    {
        return view('Admin/video/Tambah_video');
    }

    public function store_video()
    {
        if (!$this->validate([
            'judul_video' => [
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

            'ket_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'deskripsi_video' => [
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
            'judul_video' => $this->request->getVar('judul_video'),
            'list_video' => $this->request->getVar('list_video'),
            'ket_video' => $this->request->getVar('ket_video'),
            'deskripsi_video' => $this->request->getVar('deskripsi_video'),

        ]);
        session()->setFlashdata('message', 'Tambah video Berhasil');
        return redirect()->to('/Playlist_Video');
    }

    function edit_video($id)
    {
        $datavideo = $this->video->find($id);
        if (empty($datavideo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data video Tidak ditemukan !');
        }
        $data['video'] = $datavideo;
        return view('Admin/video/Edit_Video', $data);
    }

    public function update_video($id)
    {
        if (!$this->validate([
            'judul_video' => [
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

            'ket_video' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'deskripsi_video' => [
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
            'judul_video' => $this->request->getVar('judul_video'),
            'list_video' => $this->request->getVar('list_video'),
            'ket_video' => $this->request->getVar('ket_video'),
            'deskripsi_video' => $this->request->getVar('deskripsi_video')

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Playlist_Video');
    }

    function delete_video($id)
    {
        $datavideo = $this->video->find($id);
        if (empty($datavideo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data video Tidak ditemukan !');
        }
        $this->video->delete($id);
        session()->setFlashdata('message', 'Delete video Berhasil');
        return redirect()->to('/Playlist_Video');
    }

    function Detail_video($id)
    {
        $datavideo = $this->video->find($id);
        if (empty($datavideo)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data video Tidak ditemukan !');
        }
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['video'] = $datavideo;
        return view('Admin/Video/DetailVideo', $data);
    }
}
