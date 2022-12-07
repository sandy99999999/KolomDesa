<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{


    protected $table = "foto";
    protected $primaryKey = "id_foto";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_foto', 'judul_foto', 'list_foto', 'ket_foto', 'created_at', 'deskripsi_foto', 'updated_at'];
}
