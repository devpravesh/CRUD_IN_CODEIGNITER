<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';

    protected $primaryKey = 'project_id';
    
    protected $allowedFields = ['cname', 'cemail', 'cphone','site','created_at'];
}
