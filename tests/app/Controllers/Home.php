<?php

namespace App\Controllers;
use App\Models\ListBeritaModel;
use App\Models\FotoModel;

class Home extends BaseController
{
    protected $list_berita;
    
    function __construct()
    {
        $this->list_berita = new ListBeritaModel();
        $this->list_berita = new FotoModel();
    }

    public function index()
    {
        $list_berita = new ListBeritaModel();
        // $keyword = $this->request->getVar('cari');
        // if ($keyword) {
        //     $query = $list_berita->Pencarian($keyword);
        //     $jumlah = "Pencarian dengan nama <B>$keyword<B> ditemukan".$query->affectedRows()."Data";
        // } else {
        //     $query = $list_berita;
        //     $jumlah = "";
        // }
        
        $data['headline'] = $list_berita->where('headline', 'Ya')->findAll('1','0');
        $data['headline1'] = $list_berita->where('headline', 'Ya')->findAll('4','1');
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('1','0');
        $data['pilihan1'] = $list_berita->where('pilihan', 'Ya')->findAll('3','1');
        $data['pilihan2'] = $list_berita->where('pilihan', 'Ya')->findAll('4','6');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('2','0');
        $data['berita_utama1'] = $list_berita->where('berita_utama', 'Ya')->findAll('5','2');
        $data['berita_utama2'] = $list_berita->where('berita_utama', 'Ya')->findAll('8','7');
        $data['foto'] = $list_berita->findAll('8','10');
        $data['video'] = $list_berita->findAll('2','0');
        return view('Pages/home', $data);
    }

    public function Pencarian()
    {
        $list_berita = new ListBeritaModel();
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $query = $list_berita->Pencarian($keyword);
            $jumlah = "Pencarian dengan nama <B>$keyword<B> ditemukan".$query->affectedRows()."Data";
        } else {
            $query = $list_berita;
            $jumlah = "";
        }

        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll();
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll();
        $data['list_berita'] = $list_berita->findAll();
        return view('Pages/pencarian', $data);
    }

    public function Fotox()
    {
        $list_berita = new ListBeritaModel();
        
        
        $data['headline'] = $list_berita->where('headline', 'Ya')->findAll('1','0');
        $data['headline1'] = $list_berita->where('headline', 'Ya')->findAll('4','1');
        $data['pilihan'] = $list_berita->where('pilihan', 'Ya')->findAll('1','0');
        $data['pilihan1'] = $list_berita->where('pilihan', 'Ya')->findAll('3','1');
        $data['pilihan2'] = $list_berita->where('pilihan', 'Ya')->findAll('4','6');
        $data['berita_utama'] = $list_berita->where('berita_utama', 'Ya')->findAll('2','0');
        $data['berita_utama1'] = $list_berita->where('berita_utama', 'Ya')->findAll('5','2');
        $data['berita_utama2'] = $list_berita->where('berita_utama', 'Ya')->findAll('8','7');
        return view('Pages/home', $data);
    }


    public function Admin()
    {
   
        // $data['ListBerita'] = $this->list_berita->findAll();
        return view('Admin/Dashboard_Admin');
    }

    public function Login()
    {
        return view('Layout/Login');
    }

    public function Daftar()
    {
        return view('Layout/Daftar');
    }

    public function Dashboard_Admin()
    {
        return view('Admin/Dashboard_Admin');
    }

    public function Tema()
    {
        return view('Admin/Tema');
    }

    public function Tema_User()
    {
        return view('User/Tema_User');
    }

    public function IdentitasWeb()
    {
        return view('Admin/Kategori_Web/IdentitasWeb');
    }

    public function MenuWebsite()
    {
        return view('Admin/Kategori_Web/MenuWebsite');
    }

    public function HalamanBaru()
    {
        return view('Admin/Kategori_Web/HalamanBaru');
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

    public function Berita_Foto()
    {
        return view('Admin/Kategori_Admin/Berita_Foto');
    }

    public function GaleriFoto_Berita()
    {
        return view('Admin/Kategori_Admin/GaleriFoto_Berita');
    }

    public function Playlist_Video()
    {
        return view('Admin/Kategori_Admin/Playlist_Video');
    }

    public function video()
    {
        return view('Admin/Kategori_Admin/Video');
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
