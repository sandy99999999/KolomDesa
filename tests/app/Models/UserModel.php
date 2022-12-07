<?php 

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    
        
    protected $table = "user";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nama', 'created_at', 'updated_at' ];
    
 
}