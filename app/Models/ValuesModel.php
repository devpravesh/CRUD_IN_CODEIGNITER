<?php

namespace App\Models;

use CodeIgniter\Model;

class ValuesModel extends Model
{
    protected $table = 'firebase';
    protected $primaryKey = 'id';
    protected $allowedFields = ['countvalue'];  
}
