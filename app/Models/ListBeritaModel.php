<?php

namespace App\Models;

use CodeIgniter\Model;

class ListBeritaModel extends Model
{

   protected $table = "list_berita";
   protected $primaryKey = "id_berita";
   protected $returnType = "object";
   protected $useTimestamps = true;
   protected $allowedFields = [
      'judul_berita', 'sub_judul', 'video_youtube', 'id_kategori', 'headline', 'pilihan', 'berita_utama',
      'isi_berita', 'gambar', 'ket_gambar', 'tag_berita', 'isi_komentar', 'nama_komentar', 'email_komentar',
      'tag_berita', 'nama_penulis', 'nama_editor', 'created_at', 'updated_at'
   ];

   public function pencarian($keyword)
   {
      return $this->table('list_berita')->like('judul_berita', $keyword);
   }

   function getAll()
   {
      $builder = $this->db->table('list_berita');
      $builder->join('komentar', 'komentar.id_berita = list_berita.id_berita');
      $query = $builder->get();
      return $query->getResult();
   }

   function jumlah()
   {
      $builder = $this->db->table('list_berita');
      $builder->selectSum('id_berita');
      $query = $builder->get();
      return $query->getResult();
   }

   function update_viewer($id)
   {
      $viewer = $this->query("SELECT dilihat FROM list_berita WHERE dilihat='$id'");
      $hts = $viewer++;
      $data = array('dilihat' => $hts);
      $this->where('id_berita', $id)->update('dilihat', $data);
   }
}
