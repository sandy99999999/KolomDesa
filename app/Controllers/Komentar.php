<?php

namespace App\Controllers;

use App\Models\ListBeritaModel;
use App\Models\KomentarModel;


class Komentar extends BaseController
{
    protected $komentar;
    protected $list_berita;

    function __construct()
    {
        $this->list_berita = new ListBeritaModel();
        $this->komentar = new KomentarModel();
    }

    public function index()
    {
        // $komentar = new KomentarModel();
        $data['komentar'] = $this->komentar->getAll();
        return view('Kategori/Kategori', $data);
    }
}
