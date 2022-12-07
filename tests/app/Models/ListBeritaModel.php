<?php 

namespace App\Models;
use CodeIgniter\Model;

class ListBeritaModel extends Model
{
    
    protected $table = "list_berita";
    protected $primaryKey = "id_berita";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_berita','sub_judul','video_youtube','id_kategori','headline','pilihan','berita_utama','isi_berita','gambar','ket_gambar','tag_berita','created_at', 'updated_at'];
 
 public function pencarian($keyword)
 {
    return $this->table('list_berita')->like('judul_berita', $keyword);
 }
 
}