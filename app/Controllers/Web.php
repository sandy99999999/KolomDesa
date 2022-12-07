<?php

namespace App\Controllers;

use App\Models\WebModel;

class Web extends BaseController
{
    protected $identitas_web;

    function __construct()
    {
        $this->web = new WebModel();
    }

    public function Index()
    {
        $data['web'] = $this->web->findAll();
        return view('Admin/Web/PT', $data);
    }

    public function TentangKami()
    {
        $data['tentang'] = $this->web->findAll();
        return view('Admin/Web/TentangKami/Tentang_Kami', $data);
    }

    public function Edit($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['tentang'] = $datatentang;
        return view('Admin/Web/TentangKami/EditTentang', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'tentang_kami' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'tentang_kami' => $this->request->getVar('tentang_kami'),

        ]);
        session()->setFlashdata('message', 'Update Data Berhasil');
        return redirect()->to('/Tentang');
    }

    public function Redaksi()
    {
        $data['tentang'] = $this->web->findAll();
        return view('Admin/Web/Redaksi/Redaksi', $data);
    }

    public function Edit_Redaksi($id)
    {
        $dataredaksi = $this->web->find($id);
        if (empty($dataredaksi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['redaksi'] = $dataredaksi;
        return view('Admin/Web/Redaksi/EditRedaksi', $data);
    }

    public function update_Redaksi($id)
    {
        if (!$this->validate([
            'redaksi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'redaksi' => $this->request->getVar('redaksi'),

        ]);
        session()->setFlashdata('message', 'Update Data Berhasil');
        return redirect()->to('/Redaksi');
    }

    public function Iklan()
    {
        $data['iklan'] = $this->web->findAll();
        return view('Admin/Web/Info_Iklan/Iklan', $data);
    }

    public function Edit_Iklan($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['tentang'] = $datatentang;
        return view('Admin/Web/Info_Iklan/edit_iklan', $data);
    }

    public function update_Iklan($id)
    {
        if (!$this->validate([
            'info_iklan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'info_iklan' => $this->request->getVar('info_iklan'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Info_iklan');
    }

    public function Pedoman()
    {
        $data['pedoman'] = $this->web->findAll();
        return view('Admin/Web/Pedoman_Cyber/Pedoman', $data);
    }

    public function Edit_Pedoman($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['tentang'] = $datatentang;
        return view('Admin/Web/Pedoman_Cyber/Edit_Pedoman', $data);
    }

    public function update_Pedoman($id)
    {
        if (!$this->validate([
            'pedoman_cyber' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'pedoman_cyber' => $this->request->getVar('pedoman_cyber'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Pedoman');
    }

    public function Disclaimer()
    {
        $data['disclaimer'] = $this->web->findAll();
        return view('Admin/Web/Disclaimer/Disclaimer', $data);
    }

    public function Edit_Disclaimer($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['disclaimer'] = $datatentang;
        return view('Admin/Web/Disclaimer/Edit_Disclaimer', $data);
    }

    public function Update_Disclaimer($id)
    {
        if (!$this->validate([
            'disclaimer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'disclaimer' => $this->request->getVar('disclaimer'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Disclaimer');
    }

    public function Kebijakan()
    {
        $data['kebijakan'] = $this->web->findAll();
        return view('Admin/Web/Kebijakan_Privasi/Kebijakan', $data);
    }

    public function Edit_Kebijakan($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['kebijakan'] = $datatentang;
        return view('Admin/Web/Kebijakan_Privasi/Edit_Kebijakan', $data);
    }

    public function Update_Kebijakan($id)
    {
        if (!$this->validate([
            'kebijakan_privasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'kebijakan_privasi' => $this->request->getVar('kebijakan_privasi'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Kebijakan');
    }

    public function PedomanGuna()
    {
        $data['pedomanguna'] = $this->web->findAll();
        return view('Admin/Web/Pedoman_Penggunaan/PedomanGuna', $data);
    }

    public function Edit_PedomanGuna($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['pedomanguna'] = $datatentang;
        return view('Admin/Web/Pedoman_Penggunaan/Edit_PedomanGuna', $data);
    }

    public function Update_PedomanGuna($id)
    {
        if (!$this->validate([
            'pedoman_penggunaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'pedoman_penggunaan' => $this->request->getVar('pedoman_penggunaan'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/PedomanGuna');
    }

    public function Panduan()
    {
        $data['panduan'] = $this->web->findAll();
        return view('Admin/Web/Panduan_Pengiriman/Panduan', $data);
    }

    public function Edit_Panduan($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['panduan'] = $datatentang;
        return view('Admin/Web/Panduan_Pengiriman/Edit_Panduan', $data);
    }

    public function Update_Panduan($id)
    {
        if (!$this->validate([
            'panduan_pengiriman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'panduan_pengiriman' => $this->request->getVar('panduan_pengiriman'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Panduan');
    }

    public function Kontributor()
    {
        $data['Kontributor'] = $this->web->findAll();
        return view('Admin/Web/Kontributor/Kontributor', $data);
    }

    public function Edit_Kontributor($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['Kontributor'] = $datatentang;
        return view('Admin/Web/Kontributor/Edit_Kontributor', $data);
    }

    public function Update_Kontributor($id)
    {
        if (!$this->validate([
            'kontributor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'kontributor' => $this->request->getVar('kontributor'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Kontributor');
    }

    public function Copyright()
    {
        $data['Copyright'] = $this->web->findAll();
        return view('Admin/Web/Copyright/Copyright', $data);
    }

    public function Edit_Copyright($id)
    {
        $datatentang = $this->web->find($id);
        if (empty($datatentang)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
        $data['Copyright'] = $datatentang;
        return view('Admin/Web/Copyright/Edit_Copyright', $data);
    }

    public function Update_Copyright($id)
    {
        if (!$this->validate([
            'copyright' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->web->update($id, [
            'copyright' => $this->request->getVar('copyright'),

        ]);
        session()->setFlashdata('message', 'Update Data Video Berhasil');
        return redirect()->to('/Copyright');
    }
}
