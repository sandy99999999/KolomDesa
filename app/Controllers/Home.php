<?php

namespace App\Controllers;

use App\Models\ListBeritaModel;
use App\Models\FotoModel;
use App\Models\VideoModel;

class Home extends BaseController
{
    protected $list_berita;
    protected $foto;
    protected $video;

    function __construct()
    {
        $this->list_berita = new ListBeritaModel();
        $this->Foto = new FotoModel();
        $this->Video = new VideoModel();
    }

    public function index()
    {
        $list_berita = new ListBeritaModel();
        $Video = new VideoModel();
        $Foto = new FotoModel();
        $data['headline'] = $list_berita->orderBy('id_berita', 'DESC')->where('headline', 'Ya')->findAll('3', '0');
        $data['headline1'] = $list_berita->orderBy('id_berita', 'DESC')->where('headline', 'Ya')->findAll('8', '3');
        $data['trending'] = $list_berita->orderBy('id_berita', 'DESC')->findAll('8', '0');
        $data['populer'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('6', '0');
        $data['utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('6', '0');
        $data['Tokoh'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Tokoh Desa')->findAll('6', '0');
        $data['wisata'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('2', '0');
        $data['wisata1'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('4', '2');
        $data['berita'] = $list_berita->orderBy('id_berita', 'DESC')->findAll('5', '0');
        $data['foto'] = $Foto->orderBy('id_foto', 'DESC')->findAll();
        $data['video'] = $Video->orderBy('id_video', 'DESC')->findAll();
        // $data['berita'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Internasional')->findAll('2', '0');
        return view('Layout2/Content', $data);
    }

    function Kategori($id)
    {
        $databerita = $this->list_berita->find($id);
        if (empty($databerita)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Berita Tidak ditemukan !');
        }
        $data['Internasional'] = $this->list_berita->where('id_kategori', 'Internasional')->findAll('1', '0');
        $data['Nasional'] = $this->list_berita->where('id_kategori', 'Nasional')->findAll('1', '0');
        $data['list_berita'] = $this->list_berita->findAll();
        return view('Layout/Header', $data);
    }

    public function Pencarian()
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
        $data['list_berita'] = $list_berita->findAll();
        return view('Pages/pencarian', $data);
    }

    // Admin
    public function Dashboard_Admin()
    {
        $list_berita = new ListBeritaModel();
        // $Video = new VideoModel();
        // $Foto = new FotoModel();
        // $data['headline'] = $list_berita->orderBy('id_berita', 'DESC')->where('headline', 'Ya')->findAll('3', '0');
        // $data['headline1'] = $list_berita->orderBy('id_berita', 'DESC')->where('headline', 'Ya')->findAll('8', '3');
        // $data['trending'] = $list_berita->orderBy('id_berita', 'DESC')->findAll('8', '0');
        // $data['populer'] = $list_berita->orderBy('id_berita', 'DESC')->where('pilihan', 'Ya')->findAll('6', '0');
        // $data['utama'] = $list_berita->orderBy('id_berita', 'DESC')->where('berita_utama', 'Ya')->findAll('6', '0');
        // $data['Tokoh'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Tokoh Desa')->findAll('6', '0');
        // $data['wisata'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('2', '0');
        // $data['wisata1'] = $list_berita->orderBy('id_berita', 'DESC')->where('id_kategori', 'Desa Wisata')->findAll('4', '2');
        $data['berita'] = $list_berita->jumlah();
        // $data['komentar'] = $this->komentar->where('id_berita', $id)->findAll();
        // $data['foto'] = $Foto->orderBy('id_foto', 'DESC')->findAll();
        // $data['video'] = $Video->orderBy('id_video', 'DESC')->findAll();

        return view('Admin/Dashboard_Admin', $data);
    }

    public function Tema()
    {
        return view('Admin/Tema');
    }

    public function Tema_User()
    {
        return view('User/Tema_User');
    }

    public function Kategori_Berita()
    {
        return view('Admin/Menu_Admin/Kategori_Berita');
    }

    public function Berita()
    {
        return view('Admin/Kategori_Berita/Berita');
    }

    public function Tag_Berita()
    {
        return view('Admin/Kategori_Admin/Tag_Berita');
    }

    public function Komentar_Berita()
    {
        return view('Admin/Kategori_Admin/Komentar_Berita');
    }

    public function Sensor_Berita()
    {
        return view('Admin/Kategori_Admin/Sensor_Berita');
    }

    public function Tag_Video()
    {
        return view('Admin/Kategori_Admin/Tag_Video');
    }

    public function Komentar_Video()
    {
        return view('Admin/Kategori_Admin/Komentar_Video');
    }

    public function Iklan_Atas()
    {
        return view('Admin/Kategori_Iklan/Iklan_Atas');
    }

    public function Iklan_Home()
    {
        return view('Admin/Kategori_Iklan/Iklan_Home');
    }

    public function Iklan_Sidebar()
    {
        return view('Admin/Kategori_Iklan/Iklan_Sidebar');
    }

    public function Logo_Website()
    {
        return view('Admin/Kategori_Web/Logo_Website');
    }

    public function Template_Website()
    {
        return view('Admin/Kategori_Web/Template_Website');
    }

    public function Backround_Website()
    {
        return view('Admin/Kategori_Web/Backround_Website');
    }

    public function Agenda()
    {
        return view('Admin/Interaksi/Agenda');
    }

    public function Sekilas_Info()
    {
        return view('Admin/Interaksi/Sekilas_Info');
    }

    public function Jejak_Pendapat()
    {
        return view('Admin/Interaksi/Jejak_Pendapat');
    }

    public function Dashboard_User()
    {
        return view('User/Dashboard_User');
    }

    public function Input_Berita()
    {
        return view('User/Input_Berita');
    }

    public function Input()
    {
        return view('Admin/Kategori_User/Input');
    }

    public function Data_User()
    {
        return view('Admin/Kategori_User/Data_User');
    }
}
