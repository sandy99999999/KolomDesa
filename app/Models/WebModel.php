<?php

namespace App\Models;

use CodeIgniter\Model;

class WebModel extends Model
{


    protected $table = "identitas_web";
    protected $primaryKey = "id_web";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'id_web', 'tentang_kami', 'redaksi', 'info_iklan', 'pedoman_cyber', 'disclaimer', 'kebijakan_privasi', 'pedoman_penggunaan', 'panduan_pengiriman', 'kontributor', 'copyright', 'created_at', 'updated_at'
    ];
}
