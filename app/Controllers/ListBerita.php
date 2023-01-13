<?php

namespace App\Controllers;

use App\Models\ListBeritaModel;
use App\Models\FotoModel;
use App\Models\VideoModel;
use App\Models\IklanModel;
use App\Models\KomentarModel;
use App\Models\UserModel;

class ListBerita extends BaseController
{
    protected $list_berita;
    protected $iklan;
    protected $komentar;
    protected $user;
    protected $foto;

    function __construct()
    {
        $this->list_berita = new ListBeritaModel();
        $this->foto = new FotoModel();
        $this->iklan = new IklanModel();
        $this->komentar = new KomentarModel();
        $this->user = new UserModel();
    }

    public function Foto()
    {
        $foto = new FotoModel();
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['foto'] = $foto->findAll();
        $data['list_berita'] = $this->list_berita->findAll('5', '0');
        $data['trending'] = $this->list_berita->findAll('5', '0');

        return view('Kategori/Galeri_Foto', $data);
    }

    public function Video()
    {
        $video = new VideoModel();
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['video'] = $video->findAll('5', '0');
        $data['trending'] = $this->list_berita->findAll('5', '0');

        return view('Kategori/Galeri_Video', $data);
    }

    public function Kategori()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->where('id_kategori', 'Internasional')->findAll('10', '0');
        return view('Kategori/Internasional', $data);
    }

    public function Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Internasional')->findAll();
        $data['iklan'] = $this->iklan->where('kategori_iklan', 'IklanSidebar')->findAll('1');
        $data['trending'] = $list_berita->findAll('5', '0');
        $data['headline'] = $list_berita->findAll('5', '0');
        return view('Kategori/Desa', $data);
    }

    public function Nasional()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Nasional')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Nasional', $data);
    }

    public function Daerah()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Daerah')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Daerah', $data);
    }

    public function Jajanan()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Jajanan')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Jajanan', $data);
    }

    public function Tradisi()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Tradisi')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Tradisi', $data);
    }

    public function Permainan()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Tradisi')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Permainan', $data);
    }

    public function Analisa()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('1', '0');
        $data['dw1'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('1', '1');
        $data['dw2'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('1', '2');
        $data['dw3'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('1', '3');
        return view('Kategori/Analisa', $data);
    }

    public function Desa_Wisata()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll();
        // $data['dw1'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('4', '2');
        return view('Kategori/Desa_Wisata', $data);
    }

    public function Tokoh_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Tokoh Desa')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');

        return view('Kategori/Tokoh_Desa', $data);
    }

    public function Bum_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['bd'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'BUM Desa')->findAll();
        return view('Kategori/Bum_Desa', $data);
    }

    public function Kabar_Desa()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Kabar Desa')->findAll('10', '0');
        $data['trending'] = $list_berita->findAll('5', '0');
        return view('Kategori/Kabar_Desa', $data);
    }

    public function Infografis()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Infografis')->findAll();
        return view('Kategori/Infografis', $data);
    }

    public function VideoInovasi()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Video Inovasi')->findAll();
        return view('Kategori/Video_Inovasi', $data);
    }

    public function DanaDesa()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Dana Desa')->findAll();
        return view('Kategori/DanaDesa', $data);
    }

    public function BumDes()
    {
        $list_berita = new ListBeritaModel();
        $data['dw'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'BumDes')->findAll();
        return view('Kategori/BumDes', $data);
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

        // $data['list_berita'] = $list_berita->paginate(5, 'list_berita');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->paginate(5, 'list_berita');
        $data['pager'] = $list_berita->pager;
        $data['nomor'] = nomor($this->request->getVar('page_list_berita'), 5);

        return view('/Admin/Berita/Daftar_Berita', $data);
    }

    public function Tambah()
    {
        $list_berita = new ListBeritaModel();
        $data['pilihan'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('5', '0');
        $data['berita_utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('5', '0');
        $data['list_berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Internasional')->findAll();
        $data['iklan'] = $this->iklan->where('kategori_iklan', 'IklanSidebar')->findAll('1');
        return view('Admin/Berita/Tambah_Berita', $data);
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
            'nama_penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'nama_editor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            // 'tag_berita' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Harus diisi'
            //     ]
            // ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $title = trim(strtolower($this->request->getVar('judul_berita')));
        $out = explode(" ", $title);
        $slug = implode("-", $out);

        $this->list_berita->insert([
            'judul_berita' => $this->request->getVar('judul_berita'),
            'sub_judul' => $slug,
            'video_youtube' => $this->request->getVar('video_youtube'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'headline' => $this->request->getVar('headline'),
            'pilihan' => $this->request->getVar('pilihan'),
            'berita_utama' => $this->request->getVar('berita_utama'),
            'isi_berita' => $this->request->getVar('isi_berita'),
            'gambar' => $this->request->getVar('gambar'),
            'ket_gambar' => $this->request->getVar('ket_gambar'),
            'nama_penulis' => $this->request->getVar('nama_penulis'),
            'nama_editor' => $this->request->getVar('nama_editor'),
            // 'tag_berita' => $this->request->getVar('tag_berita'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Berita Berhasil');
        return redirect()->to('/berita_list');
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
            'nama_penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'nama_editor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->list_berita->update($id, [
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
            'nama_penulis' => $this->request->getVar('nama_penulis'),
            'nama_editor' => $this->request->getVar('nama_editor'),

        ]);
        session()->setFlashdata('message', 'Update Data Berita Berhasil');
        return redirect()->to('/berita_list');
    }

    function Delete($id)
    {
        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $this->list_berita->delete($id);
        session()->setFlashdata('message', 'Delete Data Berita Berhasil');
        return redirect()->to('/berita_list');
    }


    function Detail($sub_judul)
    {
        $this->list_berita = new ListBeritaModel();
        $databerita = $this->list_berita->where('sub_judul', $sub_judul)->find();
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['pilihan'] = $this->list_berita->where('pilihan', 'Ya')->findAll('8', '0');
        $data['berita_utama'] = $this->list_berita->where('berita_utama', 'Ya')->findAll('8', '0');
        $data['list_berita'] = $databerita[0];
        $data['iklan_detail'] = $this->iklan->where('kategori_iklan', 'Iklan_Detail')->findAll('1');
        $data['komentar'] = $this->komentar->where('id_berita', $sub_judul)->findAll();
        $data['lihat'] = $this->list_berita->where('dilihat', $sub_judul)->findAll();
        $data['user'] = $this->user->where('nama', 'REDAKSI KOLOM DESA')->findAll();
        $data['trending'] = $this->list_berita->findAll('5', '0');
        $data['nasional'] = $this->list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Nasional')->findAll('2', '1');
        $data['daerah'] = $this->list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Daerah')->findAll('2', '0');
        $data['desa'] = $this->list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa')->findAll('2', '0');
        return view('Admin/Detail', $data);
    }

    public function komentar()
    {
        $komentar = new KomentarModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $query = $komentar->Pencarian($keyword);
            $jumlah = "Pencarian dengan nama <B>$keyword<B> ditemukan" . $query->affectedRows() . "Data";
        } else {
            $query = $komentar;
            $jumlah = "";
        }

        $komentar = new KomentarModel();
        $data['komentar'] = $komentar->orderBy('id_komentar', 'DESC')->paginate(5, 'komentar');
        $data['pager'] = $komentar->pager;
        $data['nomor'] = nomor($this->request->getVar('page_komentar'), 5);
        return view('Admin/Berita/Komentar', $data);
    }

    public function komentar_insert()
    {
        if (!$this->validate([
            'nama_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'email_pengirim' => [
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

        $this->komentar->insert([
            'id_berita' => $this->request->getVar('id_berita'),
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'email_pengirim' => $this->request->getVar('email_pengirim'),
            'isi_komentar' => $this->request->getVar('isi_komentar'),

        ]);
        session()->setFlashdata('message', 'Kirim Komentar Berhasil');
        return redirect()->to('/');
    }
}