<?php namespace App\Models;
use CodeIgniter\Database\BaseBuilder;

class M_berita
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function join()
    {
        /**
         * SELECT video_games_sales.Name, video_games_genre.genre_name
         * FROM video_games_sales
         * LEFT JOIN video_games_genre ON video_games_sales.Genre = video_games_genre.id
         */
        $builder = $this->db->table('list_berita');
        $builder->select('list_berita.judul_berita, kategori.kategori_berita');
        $builder->join('kategori', 'list_berita.id_kategori = kategori.id_kategori');
        $query = $builder->get();
        return $query;
    }

    public function get_where()
    {
        //SELECT * FROM `video_games_sales` WHERE `Publisher` = 'Nintendo'
        $builder = $this->db->table('list_berita');
        $query = $builder->getWhere(['id_kategori'=>'2']);
        return $query;
    }  

}