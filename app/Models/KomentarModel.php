<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{


    protected $table = "komentar";
    protected $primaryKey = "id_komentar";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_komentar', 'id_berita', 'nama_pengirim',  'email_pengirim', 'isi_komentar', 'created_at', 'updated_at'];

    public function pencarian($keyword)
    {
        return $this->table('komentar')->like('nama_pengirim', $keyword);
    }

    function getAll()
    {
        $builder = $this->db->table('komentar');
        $builder->join('list_berita', 'list_berita.id_berita = komentar.id_berita');
        $query = $builder->get();
        return $query->getResult();
    }
}
