<?php 

namespace App\Models;
use CodeIgniter\Model;

class KomentarModel extends Model
{
    
        
    protected $table = "komentar";
    protected $primaryKey = "id_komentar";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_komentar', 'berita_id', 'nama_pengirim',  'email_pengirim', 'created_at', 'updated_at' ];
    
 
}