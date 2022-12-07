<?php

namespace App\Models;

use CodeIgniter\Model;

class IklanModel extends Model
{


    protected $table = "iklan";
    protected $primaryKey = "id_foto";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_iklan', 'judul_iklan', 'kategori_iklan', 'created_at', 'updated_at'];
}
