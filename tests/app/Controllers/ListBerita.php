<?php

namespace App\Controllers;

use App\Models\ListBeritaModel;
use App\Models\FotoModel;

class ListBerita extends BaseController
{
    protected $list_berita;

    function __construct()
    {
        $this->list_berita = new ListBeritaModel();
        $this->foto = new FotoModel();
    }

    public function Internasional()
    {
        $list_berita = new ListBeritaModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $query = $list_berita->Pencarian($keyword);
            $jumlah = "Pencarian dengan nama <B>$keyword<B> ditemukan" . $query->affectedRows() . "Data";
        } else {
            $query = $list_berita;
            $jumlah = "";
        }

        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Internasional')->findAll('10', '0');
        return view('Kategori/Internasional', $data);
    }

    public function Nasional()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Nasional')->findAll('10', '0');
        return view('Kategori/Nasional', $data);
    }

    public function Daerah()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Daerah')->findAll('10', '0');
        return view('Kategori/Daerah', $data);
    }

    public function Jajanan()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Jajanan')->findAll('10', '0');
        return view('Kategori/Jajanan', $data);
    }

    public function Tradisi()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Tradisi')->findAll('10', '0');
        return view('Kategori/Tradisi', $data);
    }

    public function Analisa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Analisa')->findAll('10', '0');
        return view('Kategori/Analisa', $data);
    }

    public function Desa_Wisata()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Desa_Wisata')->findAll('10', '0');
        return view('Kategori/Desa_Wisata', $data);
    }

    public function Tokoh_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Tokoh_Desa')->findAll('10', '0');
        return view('Kategori/Tokoh_Desa', $data);
    }

    public function Bum_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Bum_Desa')->findAll('10', '0');
        return view('Kategori/Bum_Desa', $data);
    }

    public function Kabar_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Kabar_Desa')->findAll('10', '0');
        return view('Kategori/Galeri', $data);
    }

    public function Galeri()
    {
        $foto = new FotoModel();
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['foto_DW'] = $foto->findAll('5', '0');
        $data['video'] = $list_berita->findAll('5', '0');
        return view('Kategori/Galeri', $data);
    }

    public function index()
    {
        $list_berita = new ListBeritaModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $query = $list_berita->Pencarian($keyword);
            $jumlah = "Pencarian dengan nama <B>$keyword<B> ditemukan" . $query->affectedRows() . "Data";
        } else {
            $query = $list_berita;
            $jumlah = "";
        }

        $data['list_berita'] = $list_berita->paginate(5, 'list_berita');
        $data['pager'] = $list_berita->pager;
        $data['nomor'] = nomor($this->request->getVar('page_list_berita'), 5);

        return view('/Admin/Berita/Daftar_Berita', $data);
    }

    //  public function cari()
    // {
    //     $list_berita = new ListBeritaModel();
    //     $cari = $this->request->getGet('cari');
    //     $data['cari'] = $list_berita->where('judul_berita', $cari)->findAll();
    //     return view('/Admin/Berita/Hasil_Pencarian', $data);
    // }

    public function Tambah()
    {
        return view('Admin/Berita/Tambah_Berita');
    }

    public function Simpan()
    {
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'headline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pilihan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'berita_utama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'isi_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'ket_gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->list_berita->insert([
            'judul_berita' => $this->request->getVar('judul_berita'),
            'sub_judul' => $this->request->getVar('sub_judul'),
            'video_youtube' => $this->request->getVar('video_youtube'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'headline' => $this->request->getVar('headline'),
            'pilihan' => $this->request->getVar('pilihan'),
            'berita_utama' => $this->request->getVar('berita_utama'),
            'isi_berita' => $this->request->getVar('isi_berita'),
            'gambar' => $this->request->getVar('gambar'),
            'ket_gambar' => $this->request->getVar('ket_gambar')
            // 'tag_berita' => $this->request->getVar('tag_berita'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Berita Berhasil');
        return redirect()->to('/berita');
    }

    function Edit($id)
    {
        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['list_berita'] = $databerita;
        return view('Admin/Berita/Edit_Berita', $data);
    }

    public function Update($id)
    {
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'headline' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pilihan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'berita_utama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'isi_berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'ket_gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->list_berita->insert([
            'judul_berita' => $this->request->getVar('judul_berita'),
            'sub_judul' => $this->request->getVar('sub_judul'),
            'video_youtube' => $this->request->getVar('video_youtube'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'headline' => $this->request->getVar('headline'),
            'pilihan' => $this->request->getVar('pilihan'),
            'berita_utama' => $this->request->getVar('berita_utama'),
            'isi_berita' => $this->request->getVar('isi_berita'),
            'gambar' => $this->request->getVar('gambar'),
            'ket_gambar' => $this->request->getVar('ket_gambar'),
            'tanggal_posting' => $this->request->getVar('tanggal_posting'),

        ]);
        session()->setFlashdata('message', 'Update Data Berita Berhasil');
        return redirect()->to('/berita');
    }

    function Delete($id)
    {
        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $this->list_berita->delete($id);
        session()->setFlashdata('message', 'Delete Data Berita Berhasil');
        return redirect()->to('/berita');
    }

    function Detail($id)
    {
        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['list_berita'] = $databerita;
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['list_berita'] = $databerita;
        return view('Admin/Berita/Detail', $data);
    }


    public function Komentar($id)
    {
        if (!$this->validate([
            'nama_komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'email_komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'isi_komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $this->list_berita->insert([
            'nama_komentar' => $this->request->getVar('nama_komentar'),
            'email_komentar' => $this->request->getVar('email_komentar'),
            'isi_komentar' => $this->request->getVar('isi_komentar'),

        ]);
        session()->setFlashdata('message', 'Kirim Komentar Berhasil');
        return redirect()->to('/');
    }
}
