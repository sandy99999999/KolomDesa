<?php 

namespace App\Models;
use CodeIgniter\Model;

class TagModel extends Model
{
    
        
    protected $table = "tag_berita";
    protected $primaryKey = "id_tag";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_tag', 'list_tag'];
    
 
}