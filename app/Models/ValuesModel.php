<?php

namespace App\Models;

use CodeIgniter\Model;

class ValuesModel extends Model
{
    protected $table = 'values';
    
    protected $allowedFields = ['countvalue'];  
}
