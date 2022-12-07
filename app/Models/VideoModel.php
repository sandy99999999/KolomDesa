<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{


    protected $table = "video";
    protected $primaryKey = "id_video";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_video', 'judul_video', 'list_video',  'ket_video', 'deskripsi_video',];
}
